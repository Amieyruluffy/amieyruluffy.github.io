<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heroContent']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['heroContent']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    foreach (['profile.jpg','profile.png','profile.webp'] as $candidate) { if (file_exists(public_path('images/'.$candidate))) { $profileImage = asset('images/'.$candidate); break; } }
    $profileImage = $profileImage ?? null;
    $typingTexts = $heroContent?->typing_texts ?? ['Software Engineer','Laravel Developer','Web Developer','Python Developer'];
?>
<section id="home" class="relative overflow-hidden pt-28 sm:pt-32">
    <div class="absolute inset-x-0 top-0 mx-auto h-[42rem] max-w-7xl bg-[radial-gradient(circle_at_55%_12%,rgba(124,92,255,.20),transparent_48%)]"></div>
    <div class="mx-auto grid max-w-7xl items-center gap-14 px-5 pb-20 pt-8 lg:grid-cols-[1.12fr_.88fr] lg:px-8 lg:pb-28 lg:pt-14">
        <div class="relative z-10">
            <div class="eyebrow"><span class="size-1.5 animate-pulse rounded-full bg-accent"></span> Software Engineer · Ipoh, Perak</div>
            <div class="mt-7 flex items-center gap-3 text-xs text-muted-foreground">
                <span class="font-mono text-primary">01</span><span>Currently building</span>
                <span id="typing-text" class="font-semibold text-foreground" data-words='<?php echo json_encode($typingTexts, 15, 512) ?>'></span><span class="h-4 w-px animate-caret-blink bg-primary"></span>
            </div>
            <h1 class="mt-5 max-w-4xl font-display text-[3.35rem] font-bold leading-[.93] tracking-[-.06em] sm:text-7xl lg:text-[5.8rem]">Building <span class="text-gradient">systems</span><br>in the <span class="text-gradient">real world.</span></h1>
            <p class="mt-7 max-w-2xl text-base leading-7 text-muted-foreground sm:text-lg">I'm <strong class="text-foreground">Mohamad Amirul Helmi</strong>, a Computer Science graduate and Software Engineer focused on web systems, application development, databases, automation and practical problem solving.</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#projects" class="btn-primary" data-magnetic>Explore my work <span></span></a>
                <a href="<?php echo e(asset('resume.pdf')); ?>" target="_blank" class="btn-secondary">View Resume <span></span></a>
            </div>
            <div class="mt-10 grid max-w-2xl grid-cols-2 gap-3 sm:grid-cols-4">
                <div class="metric-card"><span class="number">01</span><strong>Laravel</strong><span>Primary stack</span></div>
                <div class="metric-card"><span class="number">02</span><strong>Python</strong><span>Programming</span></div>
                <div class="metric-card"><span class="number">03</span><strong>MySQL</strong><span>Data</span></div>
                <div class="metric-card"><span class="number">04</span><strong>Flutter</strong><span>Mobile</span></div>
            </div>
        </div>

        <div class="relative mx-auto w-full max-w-[31rem] lg:max-w-none">
            <div class="absolute -inset-10 rounded-full bg-primary/10 blur-3xl"></div>
            <div class="profile-shell relative overflow-hidden rounded-[2rem] border border-white/10 bg-[#090b14]/95 p-2 shadow-violet" data-tilt>
                <div class="relative overflow-hidden rounded-[1.55rem] border border-white/[.07] bg-[#0b0d17]">
                    <div class="flex items-center justify-between border-b border-white/[.07] px-4 py-3">
                        <div class="flex gap-1.5"><span class="size-2.5 rounded-full bg-white/20"></span><span class="size-2.5 rounded-full bg-white/20"></span><span class="size-2.5 rounded-full bg-white/20"></span></div>
                        <span class="font-mono text-[9px] uppercase tracking-[.2em] text-white/30">profile.preview</span>
                    </div>
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <?php if($profileImage): ?>
                            <img src="<?php echo e($profileImage); ?>" alt="Mohamad Amirul Helmi" class="absolute inset-0 h-full w-full object-cover object-center transition duration-700 hover:scale-[1.03]">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#080a11] via-transparent to-[#080a11]/10"></div>
                        <?php else: ?>
                            <div class="profile-placeholder absolute inset-0 grid place-items-center">
                                <div class="text-center">
                                    <div class="mx-auto grid size-28 place-items-center rounded-[2rem] border border-primary/30 bg-primary/[.04] p-4 shadow-violet"><img src="<?php echo e(asset('images/logo-mark.svg')); ?>" alt="Amieyrul logo" class="size-full"></div>
                                    <p class="mt-5 font-mono text-[10px] uppercase tracking-[.24em] text-white/35">Add your photo</p>
                                    <p class="mt-2 text-xs text-white/50">public/images/profile.jpg (or profile.png / profile.webp)</p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="absolute inset-x-5 bottom-5">
                            <div class="rounded-2xl border border-white/10 bg-black/45 p-4 backdrop-blur-xl">
                                <div class="flex items-end justify-between gap-4">
                                    <div><p class="font-mono text-[9px] uppercase tracking-[.2em] text-primary">Software Engineer</p><p class="mt-1 font-display text-xl font-bold">Mohamad Amirul Helmi</p><p class="mt-1 text-xs text-white/55">Netcentric Computing · UiTM Arau</p></div>
                                    <span class="grid size-10 shrink-0 place-items-center rounded-xl border border-accent/20 bg-accent/10 font-mono text-xs font-bold text-accent">'26</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute -right-3 -top-5 hidden animate-float-slow rounded-2xl border border-accent/20 bg-[#17130d]/90 px-4 py-3 backdrop-blur-xl sm:block">
                <p class="font-mono text-[9px] uppercase tracking-widest text-accent">Open to</p><p class="mt-1 text-sm font-bold">Software Opportunities</p>
            </div>
            <div class="absolute -bottom-5 -left-4 hidden rounded-2xl border border-primary/20 bg-[#0d0b19]/90 px-4 py-3 shadow-violet backdrop-blur-xl sm:block">
                <p class="font-mono text-[9px] uppercase tracking-widest text-primary">Focus</p><p class="mt-1 text-sm font-bold">Web · Systems · Automation</p>
            </div>
        </div>
    </div>
    <div class="border-y border-border bg-white/[.012] py-4 overflow-hidden">
        <div class="flex min-w-max animate-marquee gap-10 whitespace-nowrap text-[11px] font-mono uppercase tracking-[.22em] text-muted-foreground/60">
            <?php $__currentLoopData = array_merge(['Laravel','PHP','Python','JavaScript','MySQL','Flutter','Dart','Arduino','C++','Java'], ['Laravel','PHP','Python','JavaScript','MySQL','Flutter','Dart','Arduino','C++','Java']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span><?php echo e($tech); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/components/hero.blade.php ENDPATH**/ ?>