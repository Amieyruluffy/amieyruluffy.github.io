<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

test('project management requires login', function () {
    $this->get(route('admin.projects.index'))->assertRedirect(route('login'));
    $this->post(route('admin.projects.store'), [])->assertRedirect(route('login'));
    $this->patch('/admin/projects/1/position', ['position' => 1])->assertRedirect(route('login'));
});

test('saved project positions control portfolio and static export order', function () {
    $this->actingAs(User::factory()->create());
    $projects = collect(['Alpha Project', 'Beta Project', 'Gamma Project'])->map(fn (string $title) => Project::create([
        'title' => $title,
        'slug' => Str::slug($title),
        'description' => 'Project description',
        'sort_order' => 5,
        'is_active' => true,
        'is_featured' => true,
    ]));

    $this->patch(route('admin.projects.position', $projects[2]), ['position' => 1])
        ->assertSessionHasNoErrors()->assertRedirect(route('admin.projects.index'));
    expect(Project::orderBy('sort_order')->pluck('title')->all())
        ->toBe(['Gamma Project', 'Alpha Project', 'Beta Project']);
    expect(Project::orderBy('sort_order')->pluck('sort_order')->all())->toBe([1, 2, 3]);
    $this->get('/')->assertSeeInOrder(['Gamma Project', 'Alpha Project', 'Beta Project']);
    $this->get(route('admin.projects.index'))->assertSeeInOrder(['Gamma Project', 'Alpha Project', 'Beta Project']);

    Storage::fake('project_export');
    config(['export.disk' => 'project_export', 'export.include_files' => []]);
    $this->artisan('export', ['--skip-all' => true])->assertSuccessful();
    $html = Storage::disk('project_export')->get('index.html');
    expect(strpos($html, 'Gamma Project'))->toBeLessThan(strpos($html, 'Alpha Project'));
    expect(strpos($html, 'Alpha Project'))->toBeLessThan(strpos($html, 'Beta Project'));

    $this->patch(route('admin.projects.position', $projects[2]), ['position' => 3])
        ->assertSessionHasNoErrors();
    expect(Project::orderBy('sort_order')->pluck('title')->all())
        ->toBe(['Alpha Project', 'Beta Project', 'Gamma Project']);
});

test('invalid project positions leave the saved order unchanged', function () {
    $project = Project::create(['title' => 'Example', 'slug' => 'example', 'description' => 'Example', 'sort_order' => 7]);
    $this->actingAs(User::factory()->create());
    foreach ([0, 2, 'invalid'] as $position) {
        $this->patch(route('admin.projects.position', $project), ['position' => $position])
            ->assertSessionHasErrors('position');
    }
    expect($project->fresh()->sort_order)->toBe(7);
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
