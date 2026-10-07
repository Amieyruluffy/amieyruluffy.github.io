@extends('layouts.admin')

@section('admin-content')
<div class="space-y-8">
    <div><span class="eyebrow">Portfolio workspace</span><h1 class="mt-5 text-3xl font-bold sm:text-4xl">Welcome back, <span class="text-gradient">{{ auth()->user()->name }}.</span></h1><p class="mt-3 text-sm text-muted-foreground">Your next project deserves a place here. Keep your work and resume current.</p></div>
    <div class="grid gap-5 md:grid-cols-2">
        <a href="{{ route('admin.projects.create') }}" class="glass-card glass-hover p-7"><span class="number">01 / SELECTED WORK</span><h2 class="mt-4 text-2xl font-bold">Add a new project ↗</h2><p class="mt-3 text-sm leading-6 text-muted-foreground">Upload a screenshot, describe your work and add its live link.</p></a>
        <a href="{{ route('admin.resume.edit') }}" class="glass-card glass-hover p-7"><span class="number">02 / NEXT OPPORTUNITY</span><h2 class="mt-4 text-2xl font-bold">Update your resume ↗</h2><p class="mt-3 text-sm leading-6 text-muted-foreground">Replace your PDF so visitors can open your latest resume.</p></a>
    </div>
    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
        @foreach(['projects' => 'Projects', 'skills' => 'Skills', 'experiences' => 'Experiences', 'unread_messages' => 'Unread messages'] as $key => $label)
            <div class="metric-card metric-card-large"><span class="number">{{ $label }}</span><strong>{{ $stats[$key] }}</strong><span>Portfolio content</span></div>
        @endforeach
    </div>
    <section class="glass-card p-6 sm:p-8">
        <div class="flex items-center justify-between gap-4"><h2 class="text-xl font-bold">Recent projects</h2><a href="{{ route('admin.projects.index') }}" class="text-sm text-primary hover:underline">Manage projects →</a></div>
        <div class="mt-5 divide-y divide-border">
            @forelse($recentProjects as $project)
                <a href="{{ route('admin.projects.edit', $project) }}" class="flex items-center justify-between gap-4 py-4"><div><h3 class="text-sm font-semibold">{{ $project->title }}</h3><p class="mt-1 text-xs text-muted-foreground">Position {{ $project->sort_order }} · {{ $project->is_active && $project->is_featured ? 'Visible on portfolio' : 'Hidden from portfolio' }}</p></div><span class="text-sm text-primary">Edit ↗</span></a>
            @empty
                <p class="py-6 text-sm text-muted-foreground">Your projects will appear here. Add your first project to get started.</p>
            @endforelse
        </div>
    </section>
</div>
@endsection
