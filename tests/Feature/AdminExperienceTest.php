<?php

use App\Models\Experience;
use App\Models\User;

test('admin can save part time experience and it appears in the earlier section', function () {
    $this->seed();
    $user = User::factory()->create();
    $experience = Experience::create([
        'title' => 'Part-Time Crew Member',
        'company' => 'Kenangan Coffee',
        'description' => 'Cafe operations',
        'start_date' => '2026-09-01',
        'type' => 'job',
    ]);

    $this->actingAs($user)->get(route('admin.experiences.edit', $experience))
        ->assertSuccessful()
        ->assertSee('value="earlier"', false)
        ->assertSee('value="freelance"', false);

    $this->actingAs($user)->put(route('admin.experiences.update', $experience), [
        'title' => 'Part-Time Crew Member',
        'company' => 'Kenangan Coffee - Tasek DT Mutiara',
        'description' => 'Updated cafe operations',
        'responsibilities' => "Customer service\nBeverage preparation",
        'start_date' => '2026-09-01',
        'is_current' => 1,
        'type' => 'earlier',
    ])->assertSessionHasNoErrors()->assertRedirect(route('admin.experiences.index'));

    expect($experience->fresh()->type)->toBe('earlier');

    $this->get('/')->assertSuccessful()->assertSeeInOrder([
        'Work that shaped my',
        'Kenangan Coffee - Tasek DT Mutiara',
        'Present',
        'Customer service',
        'Beverage preparation',
    ]);
});

test('admin can create part time and freelance experiences', function (string $type) {
    $this->actingAs(User::factory()->create())->post(route('admin.experiences.store'), [
        'title' => 'Test Role',
        'company' => 'Test Company',
        'description' => 'Test description',
        'start_date' => '2026-09-01',
        'type' => $type,
    ])->assertSessionHasNoErrors()->assertRedirect(route('admin.experiences.index'));

    $this->assertDatabaseHas('experiences', ['title' => 'Test Role', 'type' => $type]);
})->with(['earlier', 'freelance']);
