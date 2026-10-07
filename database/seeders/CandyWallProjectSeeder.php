<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class CandyWallProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'ai-marketing-assistant'], [
            'title' => 'AI Marketing Assistant',
            'image' => 'images/ai-marketing.png',
            'description' => 'An AI-powered marketing workspace for managing product information, campaigns, AI-generated content and marketing workflows in one platform.',
            'technologies' => ['Laravel', 'PHP', 'JavaScript', 'AI', 'MySQL'],
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 2,
        ]);

        $remainingProjects = Project::whereNotIn('slug', ['exam-monitoring-system', 'si-manis-rasa-candy-wall'])
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        foreach ($remainingProjects as $index => $project) {
            $project->update(['sort_order' => $index + 3]);
        }

        Project::updateOrCreate(['slug' => 'si-manis-rasa-candy-wall'], [
            'title' => 'Si Manis Rasa — Candy Wall Booking',
            'description' => 'An online candy wall booking website for weddings, birthdays, engagements and corporate events. Customers can explore packages, check date availability and reserve their event online, with payment arrangements through WhatsApp.',
            'image' => 'images/candywall.png',
            'technologies' => ['Online Booking', 'WhatsApp', 'Render'],
            'live_url' => 'https://candywall-booking.onrender.com/',
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 2,
        ]);
    }
}
