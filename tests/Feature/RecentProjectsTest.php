<?php

use App\Models\Project;
use Database\Seeders\RecentProjectsSeeder;

test('recent project seeding removes the old finflow entry and keeps the new one', function () {
    $this->seed();

    Project::create([
        'slug' => 'financial-flow-management',
        'title' => 'Financial Flow Management',
        'description' => 'Previous FinFlow project entry.',
        'live_url' => 'https://finflow.epinbook.my/',
        'technologies' => [],
    ]);

    $this->seed(RecentProjectsSeeder::class);

    $this->assertDatabaseMissing('projects', ['slug' => 'financial-flow-management']);
    $this->assertDatabaseHas('projects', ['slug' => 'finflow']);
    expect(Project::where('live_url', 'like', '%finflow.epinbook.my%')->count())->toBe(1);
});

test('recent projects appear with the supplied demo link and can be seeded repeatedly', function () {
    $this->seed();
    $existingProjects = Project::orderBy('id')->get()->toArray();

    $this->seed(RecentProjectsSeeder::class);

    expect(Project::orderBy('id')->get()->toArray())->toBe($existingProjects);

    $this->get('/')
        ->assertSuccessful()
        ->assertSee('FinFlow')
        ->assertSee('https://finflow.epinbook.my/', false)
        ->assertSee('TrackVista')
        ->assertSee('SemLAP')
        ->assertSee('images/finflow.png', false)
        ->assertSee('images/trackvista.png', false)
        ->assertSee('images/semlap.png', false);

    foreach (['finflow', 'trackvista', 'semlap'] as $slug) {
        $project = Project::where('slug', $slug)->firstOrFail();

        expect($project->is_active)->toBeTrue()
            ->and($project->is_featured)->toBeTrue()
            ->and($project->image)->toBe('images/'.$slug.'.png')
            ->and(file_exists(public_path($project->image)))->toBeTrue();
    }

    expect(Project::whereIn('slug', ['trackvista', 'semlap'])->whereNotNull('live_url')->count())->toBe(0);
});

test('recent project seeding replaces placeholder images on existing projects', function () {
    $this->seed();
    Project::whereIn('slug', ['finflow', 'trackvista', 'semlap'])
        ->update(['image' => 'images/project-placeholder.svg']);

    $this->seed(RecentProjectsSeeder::class);

    foreach (['finflow', 'trackvista', 'semlap'] as $slug) {
        $this->assertDatabaseHas('projects', [
            'slug' => $slug,
            'image' => 'images/'.$slug.'.png',
        ]);
    }
});
