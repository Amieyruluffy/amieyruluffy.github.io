@props(['services'])
<section id="services" class="mx-auto max-w-7xl scroll-mt-24 px-5 py-24 lg:px-8 lg:py-28">
    <div class="grid gap-10 lg:grid-cols-[.65fr_1.35fr]"><div><span class="eyebrow">05 / Capabilities</span><h2 class="section-title mt-5">From requirement<br>to <span class="text-gradient">working system.</span></h2><p class="mt-6 max-w-sm text-sm leading-7 text-muted-foreground">The areas where I can contribute across a software project lifecycle.</p></div><div class="grid gap-4 sm:grid-cols-2">
        @php $items = [['Web Engineering','Responsive web applications and business systems using Laravel, PHP, JavaScript and modern UI patterns.'],['Database Engineering','Relational data models, CRUD modules, queries and reliable application storage.'],['System Delivery','Requirement analysis, implementation, testing, debugging and deployment support.'],['Automation & Integration','Practical integrations across APIs, hardware, mobile applications, CCTV and AI-assisted workflows.']]; @endphp
        @foreach($items as $item)<div class="glass glass-hover rounded-3xl p-6 sm:p-7"><span class="number">0{{ $loop->iteration }}</span><h3 class="mt-5 font-display text-lg font-bold">{{ $item[0] }}</h3><p class="mt-2 text-sm leading-6 text-muted-foreground">{{ $item[1] }}</p></div>@endforeach
    </div></div>
</section>
