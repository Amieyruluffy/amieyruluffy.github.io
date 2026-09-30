@props(['experiences'])
@php
    $primaryExperiences = $experiences->filter(fn($experience) => $experience->type !== 'earlier');
    $earlierExperiences = $experiences->filter(fn($experience) => $experience->type === 'earlier');
@endphp
<section id="experience" class="mx-auto max-w-7xl scroll-mt-24 px-5 py-24 lg:px-8 lg:py-32">
    <div class="grid gap-12 lg:grid-cols-[.55fr_1.45fr]">
        <div>
            <span class="eyebrow">03 / Experience</span>
            <h2 class="section-title mt-5">Engineering<br><span class="text-gradient">experience.</span></h2>
            <p class="mt-6 max-w-sm text-sm leading-7 text-muted-foreground">Professional software development, internship delivery and freelance work — followed by the earlier work experience that helped build my discipline and teamwork.</p>
        </div>
        <div class="relative space-y-5 before:absolute before:bottom-6 before:left-[9px] before:top-6 before:w-px before:bg-gradient-to-b before:from-primary/70 before:via-white/10 before:to-transparent">
            @foreach($primaryExperiences as $experience)
                <article class="relative pl-8">
                    <span class="absolute left-0 top-8 size-[19px] rounded-full border-4 border-background bg-primary shadow-[0_0_0_4px_rgba(124,92,255,.12)]"></span>
                    <div class="glass glass-hover rounded-3xl p-6 sm:p-8">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between"><div><div class="flex flex-wrap items-center gap-2"><span class="tag">{{ $experience->type ? ucfirst($experience->type) : 'Experience' }}</span>@if($experience->is_current)<span class="tag border-emerald-400/20 bg-emerald-400/[.06] text-emerald-300">Current</span>@endif</div><h3 class="mt-4 text-xl font-bold">{{ $experience->title }}</h3><p class="mt-1 text-sm text-primary">{{ $experience->company }}</p></div><span class="font-mono text-[10px] uppercase tracking-[.15em] text-muted-foreground">{{ $experience->start_date?->format('M Y') }} — {{ $experience->is_current ? 'Present' : $experience->end_date?->format('M Y') }}</span></div>
                        @if($experience->description)<p class="mt-5 text-sm leading-7 text-muted-foreground">{{ $experience->description }}</p>@endif
                        @if($experience->responsibilities)<ul class="mt-5 grid gap-3 text-sm leading-6 text-muted-foreground">@foreach($experience->responsibilities as $item)<li class="flex gap-3"><span class="mt-2 size-1.5 shrink-0 rounded-full bg-primary"></span><span>{{ $item }}</span></li>@endforeach</ul>@endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>

    @if($earlierExperiences->isNotEmpty())
        <div class="mt-20 border-t border-white/[.07] pt-12">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="eyebrow">Earlier Experience</span>
                    <h3 class="mt-4 font-display text-2xl font-bold tracking-tight sm:text-3xl">Work that shaped my <span class="text-gradient">work ethic.</span></h3>
                </div>
                <p class="max-w-md text-sm leading-6 text-muted-foreground">Alongside my technical career, I have gained valuable experience in fast-paced service and event environments, strengthening my teamwork, communication, time management, and ability to work effectively under pressure.</p>
            </div>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($earlierExperiences as $experience)
                    <article class="glass glass-hover rounded-2xl p-5">
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <span class="font-mono text-[9px] uppercase tracking-[.18em] text-primary">Part-time</span>
                                <h4 class="mt-2 text-base font-semibold text-foreground">{{ $experience->title }}</h4>
                                <p class="mt-1 text-xs text-muted-foreground">{{ $experience->company }}</p>
                            </div>
                            <span class="shrink-0 font-mono text-[9px] uppercase tracking-wider text-muted-foreground">{{ $experience->start_date?->format('Y') }}{{ $experience->end_date ? ' — '.$experience->end_date->format('Y') : '' }}</span>
                        </div>
                        @if($experience->responsibilities)
                            <ul class="mt-4 space-y-2 text-xs leading-5 text-muted-foreground">
                                @foreach(array_slice($experience->responsibilities, 0, 2) as $item)
                                    <li class="flex gap-2"><span class="mt-1.5 size-1 shrink-0 rounded-full bg-accent"></span><span>{{ $item }}</span></li>
                                @endforeach
                            </ul>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    @endif
</section>
