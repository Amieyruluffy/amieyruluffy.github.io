<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['experiences']));

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

foreach (array_filter((['experiences']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $primaryExperiences = $experiences->filter(fn($experience) => $experience->type !== 'earlier');
    $earlierExperiences = $experiences->filter(fn($experience) => $experience->type === 'earlier');
?>
<section id="experience" class="mx-auto max-w-7xl scroll-mt-24 px-5 py-24 lg:px-8 lg:py-32">
    <div class="grid gap-12 lg:grid-cols-[.55fr_1.45fr]">
        <div>
            <span class="eyebrow">03 / Experience</span>
            <h2 class="section-title mt-5">Engineering<br><span class="text-gradient">experience.</span></h2>
            <p class="mt-6 max-w-sm text-sm leading-7 text-muted-foreground">Professional software development, internship delivery and freelance work — followed by the earlier work experience that helped build my discipline and teamwork.</p>
        </div>
        <div class="relative space-y-5 before:absolute before:bottom-6 before:left-[9px] before:top-6 before:w-px before:bg-gradient-to-b before:from-primary/70 before:via-white/10 before:to-transparent">
            <?php $__currentLoopData = $primaryExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="relative pl-8">
                    <span class="absolute left-0 top-8 size-[19px] rounded-full border-4 border-background bg-primary shadow-[0_0_0_4px_rgba(124,92,255,.12)]"></span>
                    <div class="glass glass-hover rounded-3xl p-6 sm:p-8">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between"><div><div class="flex flex-wrap items-center gap-2"><span class="tag"><?php echo e($experience->type ? ucfirst($experience->type) : 'Experience'); ?></span><?php if($experience->is_current): ?><span class="tag border-emerald-400/20 bg-emerald-400/[.06] text-emerald-300">Current</span><?php endif; ?></div><h3 class="mt-4 text-xl font-bold"><?php echo e($experience->title); ?></h3><p class="mt-1 text-sm text-primary"><?php echo e($experience->company); ?></p></div><span class="font-mono text-[10px] uppercase tracking-[.15em] text-muted-foreground"><?php echo e($experience->start_date?->format('M Y')); ?> — <?php echo e($experience->is_current ? 'Present' : $experience->end_date?->format('M Y')); ?></span></div>
                        <?php if($experience->description): ?><p class="mt-5 text-sm leading-7 text-muted-foreground"><?php echo e($experience->description); ?></p><?php endif; ?>
                        <?php if($experience->responsibilities): ?><ul class="mt-5 grid gap-3 text-sm leading-6 text-muted-foreground"><?php $__currentLoopData = $experience->responsibilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="flex gap-3"><span class="mt-2 size-1.5 shrink-0 rounded-full bg-primary"></span><span><?php echo e($item); ?></span></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul><?php endif; ?>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php if($earlierExperiences->isNotEmpty()): ?>
        <div class="mt-20 border-t border-white/[.07] pt-12">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="eyebrow">Earlier Experience</span>
                    <h3 class="mt-4 font-display text-2xl font-bold tracking-tight sm:text-3xl">Work that shaped my <span class="text-gradient">work ethic.</span></h3>
                </div>
                <p class="max-w-md text-sm leading-6 text-muted-foreground">Alongside my technical career, I have gained valuable experience in fast-paced service and event environments, strengthening my teamwork, communication, time management, and ability to work effectively under pressure.</p>
            </div>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php $__currentLoopData = $earlierExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="glass glass-hover rounded-2xl p-5">
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <span class="font-mono text-[9px] uppercase tracking-[.18em] text-primary">Part-time</span>
                                <h4 class="mt-2 text-base font-semibold text-foreground"><?php echo e($experience->title); ?></h4>
                                <p class="mt-1 text-xs text-muted-foreground"><?php echo e($experience->company); ?></p>
                            </div>
                            <span class="shrink-0 font-mono text-[9px] uppercase tracking-wider text-muted-foreground"><?php echo e($experience->start_date?->format('Y')); ?><?php echo e($experience->end_date ? ' — '.$experience->end_date->format('Y') : ''); ?></span>
                        </div>
                        <?php if($experience->responsibilities): ?>
                            <ul class="mt-4 space-y-2 text-xs leading-5 text-muted-foreground">
                                <?php $__currentLoopData = array_slice($experience->responsibilities, 0, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="flex gap-2"><span class="mt-1.5 size-1 shrink-0 rounded-full bg-accent"></span><span><?php echo e($item); ?></span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
</section>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/components/experience.blade.php ENDPATH**/ ?>