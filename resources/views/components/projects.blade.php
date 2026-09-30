@props(['projects'])
@php
    // Project screenshots uploaded to public/images by the portfolio owner.
    // Keep this mapping here so images work directly from Herd without requiring
    // a storage symlink or admin upload.
    $projectImages = [
        'exam-monitoring-system' => 'images/emos.png',
        'payung-agent-management' => 'images/payung.png',
        'contractor-management-lap' => 'images/lap.png',
        'tadika-alumni-application' => 'images/tadika.png',
        'smart-attendance-fingerprint' => 'images/attendance.png',
        'train-booking-flutter' => 'images/train-booking.png',
        'wattwizard' => 'images/wattwizard.png',
    ];
@endphp
<section id="projects" class="scroll-mt-24 border-y border-border bg-white/[.012]">
    <div class="mx-auto max-w-7xl px-5 py-24 lg:px-8 lg:py-32">
        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end"><div><span class="eyebrow">04 / Selected Work</span><h2 class="section-title mt-5">Selected <span class="text-gradient">systems.</span></h2></div><p class="max-w-md text-sm leading-6 text-muted-foreground">A curated selection of professional, freelance and academic work — focused on useful systems, clean interfaces and practical engineering.</p></div>
        <div class="mt-12 grid gap-5 md:grid-cols-2">
            @foreach($projects as $project)
                <article class="project-card group glass glass-hover overflow-hidden rounded-[1.75rem] {{ $loop->first ? 'md:col-span-2 ring-1 ring-primary/10' : '' }}">
                    <div class="grid {{ $loop->first ? 'lg:grid-cols-[1.15fr_.85fr]' : '' }}">
                        <div class="relative {{ $loop->first ? 'aspect-[16/8] lg:aspect-auto min-h-[20rem]' : 'aspect-[16/9]' }} overflow-hidden bg-secondary">
                            @php
                                $mappedImage = $projectImages[$project->slug] ?? null;
                                $imageUrl = $project->image
                                    ? (str_starts_with($project->image, 'images/') ? asset($project->image) : asset('storage/'.$project->image))
                                    : ($mappedImage ? asset($mappedImage) : asset('images/project-placeholder.svg'));
                            @endphp
                            <img src="{{ $imageUrl }}" alt="{{ $project->title }}" class="h-full w-full object-cover opacity-90 transition duration-700 group-hover:scale-105 group-hover:opacity-100" onerror="this.src='{{ asset('images/project-placeholder.svg') }}'">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#070914] via-transparent to-transparent"></div>
                            <div class="absolute left-5 top-5 flex items-center gap-2"><span class="tag bg-black/30 text-white/70">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><span class="tag bg-black/30 text-white/50">PROJECT</span>@if($loop->first)<span class="tag bg-primary/15 text-primary">Featured</span>@endif</div>
                        </div>
                        <div class="flex flex-col justify-between p-6 sm:p-8">
                            <div><div class="flex items-start justify-between gap-4"><h3 class="text-xl font-bold leading-tight sm:text-2xl">{{ $project->title }}</h3><span class="text-xl text-white/20 transition group-hover:text-primary">↗</span></div><p class="mt-4 text-sm leading-7 text-muted-foreground">{{ $project->description }}</p></div>
                            <div class="mt-7"><div class="flex flex-wrap gap-2">@foreach($project->technologies as $tech)<span class="tag">{{ $tech }}</span>@endforeach</div>@if($project->live_url || $project->github_url)<div class="mt-6 flex flex-wrap gap-3">@if($project->live_url)<a href="{{ $project->live_url }}" target="_blank" rel="noreferrer" class="text-xs font-semibold text-primary hover:underline">Open system ↗</a>@endif @if($project->github_url)<a href="{{ $project->github_url }}" target="_blank" rel="noreferrer" class="text-xs font-semibold text-muted-foreground hover:text-foreground">Source ↗</a>@endif</div>@endif</div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
