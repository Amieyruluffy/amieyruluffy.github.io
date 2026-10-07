<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['aboutContent']));

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

foreach (array_filter((['aboutContent']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section id="about" class="mx-auto max-w-7xl scroll-mt-24 px-5 py-24 lg:px-8 lg:py-32">
    <div class="grid gap-12 lg:grid-cols-[.72fr_1.28fr]">
        <div>
            <span class="eyebrow">01 / About</span>
            <h2 class="section-title mt-5">Engineer mindset.<br><span class="text-gradient">Product thinking.</span></h2>
            <div class="mt-7 line max-w-xs"></div>
        </div>
        <div>
            <p class="max-w-3xl text-lg leading-8 text-muted-foreground">Recent Bachelor of Computer Science (Hons.) in Netcentric Computing graduate with hands-on experience across web application development, database management, system implementation and the software development lifecycle.</p>
            <p class="mt-5 max-w-3xl text-sm leading-7 text-muted-foreground">I enjoy turning requirements into usable systems — from business platforms and operational workflows to mobile applications, biometric attendance and CCTV-based examination monitoring. I care about maintainable code, clear interfaces and solving the actual problem behind the feature.</p>
            <div class="mt-9 grid gap-3 sm:grid-cols-3">
                <div class="metric-card metric-card-large"><span class="number">01</span><strong>2026</strong><span>Bachelor's graduate</span></div>
                <div class="metric-card metric-card-large"><span class="number">02</span><strong>14 weeks</strong><span>Industry internship</span></div>
                <div class="metric-card metric-card-large"><span class="number">03</span><strong>6+</strong><span>Selected projects</span></div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/components/about.blade.php ENDPATH**/ ?>