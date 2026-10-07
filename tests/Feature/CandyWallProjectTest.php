<?php

use App\Models\Project;
use Database\Seeders\CandyWallProjectSeeder;

test('candy wall project seeding is repeatable and preserves existing projects', function () {
    $this->seed();
    $projectCount = Project::count();

    $this->seed(CandyWallProjectSeeder::class);

    expect(Project::count())->toBe($projectCount);
    expect(Project::active()->featured()->orderBy('sort_order')->pluck('slug')->take(3)->all())
        ->toBe(['exam-monitoring-system', 'si-manis-rasa-candy-wall', 'ai-marketing-assistant']);
    $this->assertDatabaseHas('projects', [
        'slug' => 'si-manis-rasa-candy-wall',
        'live_url' => 'https://candywall-booking.onrender.com/',
        'image' => 'images/candywall.png',
        'is_active' => true,
        'is_featured' => true,
    ]);

    $this->get('/')
        ->assertSuccessful()
        ->assertSeeInOrder(['Exam Monitoring System (EMOS)', 'Si Manis Rasa', 'AI Marketing Assistant'])
        ->assertSee('Si Manis Rasa')
        ->assertSee('https://candywall-booking.onrender.com/', false)
        ->assertSee('images/candywall.png', false)
        ->assertSee('Live demo');

    expect(file_exists(public_path('images/candywall.png')))->toBeTrue();
});

test('adding candy wall restores a missing ai marketing project', function () {
    $this->seed();
    Project::where('slug', 'ai-marketing-assistant')->delete();

    $this->seed(CandyWallProjectSeeder::class);

    expect(Project::active()->featured()->orderBy('sort_order')->pluck('slug')->take(3)->all())
        ->toBe(['exam-monitoring-system', 'si-manis-rasa-candy-wall', 'ai-marketing-assistant']);
});
