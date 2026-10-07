<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['skills']));

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

foreach (array_filter((['skills']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $groups = [
        ['label'=>'Programming','icon'=>'</>','items'=>['Python','PHP','Java','C++']],
        ['label'=>'Web Engineering','icon'=>'01','items'=>['Laravel','JavaScript','HTML','CSS']],
        ['label'=>'Data & Backend','icon'=>'DB','items'=>['MySQL','SQL','Database Design']],
        ['label'=>'Platforms & Tools','icon'=>'OS','items'=>['Windows','Linux','macOS','Flutter','Arduino']],
    ];
?>
<section id="skills" class="scroll-mt-24 border-y border-border bg-white/[.012]">
    <div class="mx-auto max-w-7xl px-5 py-24 lg:px-8 lg:py-28">
        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end"><div><span class="eyebrow">02 / Toolkit</span><h2 class="section-title mt-5">The stack behind the work.</h2></div><p class="max-w-md text-sm leading-6 text-muted-foreground">A practical toolkit built through university projects, freelance development, internship work and current software engineering projects.</p></div>
        <div class="mt-12 grid gap-4 md:grid-cols-2">
            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="skill-card glass glass-hover rounded-3xl p-6 sm:p-7">
                    <div class="flex items-center justify-between"><div class="grid size-11 place-items-center rounded-xl border border-primary/20 bg-primary/10 font-mono text-xs font-bold text-primary"><?php echo e($group['icon']); ?></div><span class="number">0<?php echo e($loop->iteration); ?></span></div>
                    <h3 class="mt-7 font-display text-xl font-bold"><?php echo e($group['label']); ?></h3>
                    <div class="mt-5 flex flex-wrap gap-2"><?php $__currentLoopData = $group['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="tag"><?php echo e($item); ?></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/components/skills.blade.php ENDPATH**/ ?>