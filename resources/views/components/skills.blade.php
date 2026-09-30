@props(['skills'])
@php
    $groups = [
        ['label'=>'Programming','icon'=>'</>','items'=>['Python','PHP','Java','C++']],
        ['label'=>'Web Engineering','icon'=>'01','items'=>['Laravel','JavaScript','HTML','CSS']],
        ['label'=>'Data & Backend','icon'=>'DB','items'=>['MySQL','SQL','Database Design']],
        ['label'=>'Platforms & Tools','icon'=>'OS','items'=>['Windows','Linux','macOS','Flutter','Arduino']],
    ];
@endphp
<section id="skills" class="scroll-mt-24 border-y border-border bg-white/[.012]">
    <div class="mx-auto max-w-7xl px-5 py-24 lg:px-8 lg:py-28">
        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end"><div><span class="eyebrow">02 / Toolkit</span><h2 class="section-title mt-5">The stack behind the work.</h2></div><p class="max-w-md text-sm leading-6 text-muted-foreground">A practical toolkit built through university projects, freelance development, internship work and current software engineering projects.</p></div>
        <div class="mt-12 grid gap-4 md:grid-cols-2">
            @foreach($groups as $group)
                <div class="skill-card glass glass-hover rounded-3xl p-6 sm:p-7">
                    <div class="flex items-center justify-between"><div class="grid size-11 place-items-center rounded-xl border border-primary/20 bg-primary/10 font-mono text-xs font-bold text-primary">{{ $group['icon'] }}</div><span class="number">0{{ $loop->iteration }}</span></div>
                    <h3 class="mt-7 font-display text-xl font-bold">{{ $group['label'] }}</h3>
                    <div class="mt-5 flex flex-wrap gap-2">@foreach($group['items'] as $item)<span class="tag">{{ $item }}</span>@endforeach</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
