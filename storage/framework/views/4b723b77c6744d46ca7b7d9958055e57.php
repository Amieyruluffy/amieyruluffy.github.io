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
<section id="contact" class="scroll-mt-24 border-t border-border">
    <div class="mx-auto max-w-7xl px-5 py-24 lg:px-8 lg:py-32">
        <div class="relative overflow-hidden rounded-[2rem] border border-primary/20 bg-primary/[.06] p-7 sm:p-10 lg:p-14">
            <div class="absolute -right-24 -top-24 size-72 rounded-full bg-primary/15 blur-3xl"></div>
            <div class="relative grid gap-12 lg:grid-cols-[1.1fr_.9fr] lg:items-end">
                <div><span class="eyebrow">06 / Contact</span><h2 class="mt-6 max-w-3xl text-4xl font-bold sm:text-6xl">Have a project in mind?<br><span class="text-primary">Let's build it.</span></h2><p class="mt-6 max-w-xl text-sm leading-7 text-muted-foreground">I'm open to software development, web development and IT-related opportunities.</p></div>
                <div class="space-y-3 text-sm">
                    <a href="mailto:<?php echo e($contactInfo?->email ?? 'aamieyruljr@gmail.com'); ?>" class="glass block rounded-2xl p-5 transition hover:border-primary/30"><span class="number">EMAIL</span><p class="mt-2 font-semibold break-all"><?php echo e($contactInfo?->email ?? 'aamieyruljr@gmail.com'); ?></p></a>
                    <a href="tel:<?php echo e(preg_replace('/\D+/', '', $contactInfo?->phone ?? '01137267929')); ?>" class="glass block rounded-2xl p-5 transition hover:border-primary/30"><span class="number">PHONE</span><p class="mt-2 font-semibold"><?php echo e($contactInfo?->phone ?? '+60 11-37267929'); ?></p></a>
                    <div class="glass rounded-2xl p-5"><span class="number">LOCATION</span><p class="mt-2 font-semibold"><?php echo e($contactInfo?->location ?? 'Ipoh, Perak'); ?></p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/components/contact.blade.php ENDPATH**/ ?>