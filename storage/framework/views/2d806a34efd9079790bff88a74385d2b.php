<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['contactInfo']));

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

foreach (array_filter((['contactInfo']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<footer class="border-t border-border">
    <div class="mx-auto flex max-w-7xl flex-col gap-4 px-5 py-8 text-xs text-muted-foreground sm:flex-row sm:items-center sm:justify-between lg:px-8">
        <p>© <?php echo e(date('Y')); ?> Mohamad Amirul Helmi. Built with Laravel.</p>
        <div class="flex items-center gap-5"><a href="#home" class="transition hover:text-primary">Back to top ↑</a><?php if($contactInfo?->github_url): ?><a href="<?php echo e($contactInfo->github_url); ?>" target="_blank" class="transition hover:text-primary">GitHub ↗</a><?php endif; ?></div>
    </div>
</footer>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/components/footer.blade.php ENDPATH**/ ?>