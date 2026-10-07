<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['projects']));

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

foreach (array_filter((['projects']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
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
        'si-manis-rasa-candy-wall' => 'images/candywall.png',
    ];
?>
<section id="projects" class="scroll-mt-24 border-y border-border bg-white/[.012]">
    <div class="mx-auto max-w-7xl px-5 py-24 lg:px-8 lg:py-32">
        <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end"><div><span class="eyebrow">04 / Selected Work</span><h2 class="section-title mt-5">Selected <span class="text-gradient">systems.</span></h2></div><p class="max-w-md text-sm leading-6 text-muted-foreground">A curated selection of professional, freelance and academic work — focused on useful systems, clean interfaces and practical engineering.</p></div>
        <div class="mt-12 grid gap-5 md:grid-cols-2">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="project-card group glass glass-hover overflow-hidden rounded-[1.75rem] <?php echo e($loop->first ? 'md:col-span-2 ring-1 ring-primary/10' : ''); ?>">
                    <div class="grid <?php echo e($loop->first ? 'lg:grid-cols-[1.15fr_.85fr]' : ''); ?>">
                        <div class="relative <?php echo e($loop->first ? 'aspect-[16/8] lg:aspect-auto min-h-[20rem]' : 'aspect-[16/9]'); ?> overflow-hidden bg-secondary">
                            <?php
                                $mappedImage = $projectImages[$project->slug] ?? null;
                                $imageUrl = $project->image
                                    ? (str_starts_with($project->image, 'images/') ? asset($project->image) : asset('storage/'.$project->image))
                                    : ($mappedImage ? asset($mappedImage) : asset('images/project-placeholder.svg'));
                            ?>
                            <img src="<?php echo e($imageUrl); ?>" alt="<?php echo e($project->title); ?>" class="h-full w-full object-cover opacity-90 transition duration-700 group-hover:scale-105 group-hover:opacity-100" onerror="this.src='<?php echo e(asset('images/project-placeholder.svg')); ?>'">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#070914] via-transparent to-transparent"></div>
                            <div class="absolute left-5 top-5 flex items-center gap-2"><span class="tag bg-black/30 text-white/70"><?php echo e(str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)); ?></span><span class="tag bg-black/30 text-white/50">PROJECT</span><?php if($loop->first): ?><span class="tag bg-primary/15 text-primary">Featured</span><?php endif; ?></div>
                        </div>
                        <div class="flex flex-col justify-between p-6 sm:p-8">
                            <div><div class="flex items-start justify-between gap-4"><h3 class="text-xl font-bold leading-tight sm:text-2xl"><?php echo e($project->title); ?></h3><span class="text-xl text-white/20 transition group-hover:text-primary">↗</span></div><p class="mt-4 text-sm leading-7 text-muted-foreground"><?php echo e($project->description); ?></p></div>
                            <div class="mt-7"><div class="flex flex-wrap gap-2"><?php $__currentLoopData = $project->technologies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="tag"><?php echo e($tech); ?></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div><?php if($project->live_url || $project->github_url): ?><div class="mt-6 flex flex-wrap gap-3"><?php if($project->live_url): ?><a href="<?php echo e($project->live_url); ?>" target="_blank" rel="noreferrer" class="text-xs font-semibold text-primary hover:underline">Live demo &#8599;</a><?php endif; ?> <?php if($project->github_url): ?><a href="<?php echo e($project->github_url); ?>" target="_blank" rel="noreferrer" class="text-xs font-semibold text-muted-foreground hover:text-foreground">Source ↗</a><?php endif; ?></div><?php endif; ?></div>
                        </div>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/components/projects.blade.php ENDPATH**/ ?>