<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

test('project management requires login', function () {
    $this->get(route('admin.projects.index'))->assertRedirect(route('login'));
    $this->post(route('admin.projects.store'), [])->assertRedirect(route('login'));
});

test('admin can publish and hide a project with a screenshot', function () {
    Storage::fake('public');
    $image = UploadedFile::fake()->createWithContent('project.png', base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+a7ioAAAAASUVORK5CYII='));
    $user = User::factory()->create();

    $this->actingAs($user)->post(route('admin.projects.store'), [
        'title' => 'My Latest Project', 'description' => 'Online booking for events.',
        'technologies' => 'Laravel, PHP', 'live_url' => 'https://example.com',
        'is_active' => '1', 'is_featured' => '1', 'image' => $image,
    ])->assertRedirect(route('admin.projects.index'))->assertSessionHasNoErrors();

    $project = Project::where('title', 'My Latest Project')->firstOrFail();
    Storage::disk('public')->assertExists($project->image);
    expect($project->technologies)->toBe(['Laravel', 'PHP']);
    $this->get('/')->assertSee('My Latest Project')->assertSee('storage/'.$project->image, false);

    $this->put(route('admin.projects.update', $project), [
        'title' => 'My Latest Project', 'description' => 'Updated description',
        'is_active' => '0', 'is_featured' => '0',
        'sort_order' => '',
    ])->assertRedirect(route('admin.projects.index'));
    expect($project->fresh()->is_active)->toBeFalse();
    expect($project->fresh()->is_featured)->toBeFalse();
    $this->get('/')->assertDontSee('My Latest Project');
});

test('admin project uploads reject invalid images', function () {
    $this->actingAs(User::factory()->create())->post(route('admin.projects.store'), [
        'title' => 'Invalid Cover', 'description' => 'Test project',
        'image' => UploadedFile::fake()->create('cover.txt', 5, 'text/plain'),
    ])->assertSessionHasErrors('image');
    $this->assertDatabaseMissing('projects', ['title' => 'Invalid Cover']);
});

test('duplicate project titles receive distinct slugs', function () {
    $this->actingAs(User::factory()->create());
    foreach (range(1, 2) as $position) {
        $this->post(route('admin.projects.store'), ['title' => 'Same Project', 'description' => 'Description'])
            ->assertRedirect(route('admin.projects.index'));
    }
    expect(Project::orderBy('id')->pluck('slug')->all())->toBe(['same-project', 'same-project-2']);
});

test('dashboard and project forms use the portfolio workspace', function () {
    $this->actingAs(User::factory()->create());
    $this->get(route('admin.dashboard'))->assertSuccessful()->assertSee('amieyrul')->assertSee('Add a new project')->assertSee('Update your resume');
    $this->get(route('admin.projects.create'))->assertSuccessful()->assertSee('Add Project');
});
