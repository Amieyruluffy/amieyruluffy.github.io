<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class RecentProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::where('slug', '!=', 'finflow')
            ->where(function ($query): void {
                $query->where('live_url', 'like', '%finflow.epinbook.my%')
                    ->orWhere('title', 'Financial Flow Management');
            })
            ->delete();

        $projects = [
            [
                'slug' => 'finflow',
                'title' => 'FinFlow — Financial Flow Management',
                'description' => 'A financial workspace for managing financing facilities, drawdowns, utilization requests, payments and letters, with an overview of confirmed overdue payments and upcoming due dates.',
                'technologies' => ['Financial Management', 'Payment Tracking', 'Dashboard'],
                'live_url' => 'https://finflow.epinbook.my/',
            ],
            [
                'slug' => 'trackvista',
                'title' => 'TrackVista — Workforce Tracking',
                'description' => 'A workforce visibility and safety platform for Lembaga Air Perak, bringing together live location tracking, location history, staff and device management, geofences and safety alerts.',
                'technologies' => ['Live Tracking', 'Geofencing', 'Workforce Management'],
            ],
            [
                'slug' => 'semlap',
                'title' => 'SemLAP — Seminar Management System',
                'description' => 'A seminar management portal for Lembaga Air Perak covering seminar scheduling, participant registration and tagging, attendance, meal records, reports and certificates.',
                'technologies' => ['Seminar Management', 'Registration', 'Attendance Tracking'],
            ],
        ];

        $sortOrder = (int) Project::max('sort_order');

        foreach ($projects as $project) {
            $savedProject = Project::firstOrCreate(['slug' => $project['slug']], [
                ...$project,
                'image' => 'images/'.$project['slug'].'.png',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => ++$sortOrder,
            ]);

            $savedProject->update(['image' => 'images/'.$project['slug'].'.png']);
        }
    }
}
