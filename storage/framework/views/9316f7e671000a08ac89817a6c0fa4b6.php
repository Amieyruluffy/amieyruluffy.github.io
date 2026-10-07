<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['services']));

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

foreach (array_filter((['services']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section id="services" class="mx-auto max-w-7xl scroll-mt-24 px-5 py-24 lg:px-8 lg:py-28">
    <div class="grid gap-10 lg:grid-cols-[.65fr_1.35fr]"><div><span class="eyebrow">05 / Capabilities</span><h2 class="section-title mt-5">From requirement<br>to <span class="text-gradient">working system.</span></h2><p class="mt-6 max-w-sm text-sm leading-7 text-muted-foreground">The areas where I can contribute across a software project lifecycle.</p></div><div class="grid gap-4 sm:grid-cols-2">
        <?php $items = [['Web Engineering','Responsive web applications and business systems using Laravel, PHP, JavaScript and modern UI patterns.'],['Database Engineering','Relational data models, CRUD modules, queries and reliable application storage.'],['System Delivery','Requirement analysis, implementation, testing, debugging and deployment support.'],['Automation & Integration','Practical integrations across APIs, hardware, mobile applications, CCTV and AI-assisted workflows.']]; ?>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div class="glass glass-hover rounded-3xl p-6 sm:p-7"><span class="number">0<?php echo e($loop->iteration); ?></span><h3 class="mt-5 font-display text-lg font-bold"><?php echo e($item[0]); ?></h3><p class="mt-2 text-sm leading-6 text-muted-foreground"><?php echo e($item[1]); ?></p></div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div></div>
</section>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/components/services.blade.php ENDPATH**/ ?>