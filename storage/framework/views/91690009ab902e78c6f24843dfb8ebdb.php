<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
    <main>
        <?php if (isset($component)) { $__componentOriginal04f02f1e0f152287a127192de01fe241 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal04f02f1e0f152287a127192de01fe241 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero','data' => ['heroContent' => $heroContent]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['hero-content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heroContent)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $attributes = $__attributesOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__attributesOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $component = $__componentOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__componentOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalff6de83cb070587833d4f86022c57961 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff6de83cb070587833d4f86022c57961 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.about','data' => ['aboutContent' => $aboutContent]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['about-content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($aboutContent)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff6de83cb070587833d4f86022c57961)): ?>
<?php $attributes = $__attributesOriginalff6de83cb070587833d4f86022c57961; ?>
<?php unset($__attributesOriginalff6de83cb070587833d4f86022c57961); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff6de83cb070587833d4f86022c57961)): ?>
<?php $component = $__componentOriginalff6de83cb070587833d4f86022c57961; ?>
<?php unset($__componentOriginalff6de83cb070587833d4f86022c57961); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginale72b204ac71858b9ad76b935a89a8c0f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale72b204ac71858b9ad76b935a89a8c0f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.skills','data' => ['skills' => $skills]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('skills'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['skills' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($skills)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale72b204ac71858b9ad76b935a89a8c0f)): ?>
<?php $attributes = $__attributesOriginale72b204ac71858b9ad76b935a89a8c0f; ?>
<?php unset($__attributesOriginale72b204ac71858b9ad76b935a89a8c0f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale72b204ac71858b9ad76b935a89a8c0f)): ?>
<?php $component = $__componentOriginale72b204ac71858b9ad76b935a89a8c0f; ?>
<?php unset($__componentOriginale72b204ac71858b9ad76b935a89a8c0f); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc6251c7f3f05e12e0eca3026fb86f8f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc6251c7f3f05e12e0eca3026fb86f8f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.experience','data' => ['experiences' => $experiences]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('experience'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['experiences' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($experiences)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc6251c7f3f05e12e0eca3026fb86f8f3)): ?>
<?php $attributes = $__attributesOriginalc6251c7f3f05e12e0eca3026fb86f8f3; ?>
<?php unset($__attributesOriginalc6251c7f3f05e12e0eca3026fb86f8f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6251c7f3f05e12e0eca3026fb86f8f3)): ?>
<?php $component = $__componentOriginalc6251c7f3f05e12e0eca3026fb86f8f3; ?>
<?php unset($__componentOriginalc6251c7f3f05e12e0eca3026fb86f8f3); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal10b746ef96f4e0d8a7981993158a89b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10b746ef96f4e0d8a7981993158a89b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects','data' => ['projects' => $projects]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['projects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projects)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10b746ef96f4e0d8a7981993158a89b4)): ?>
<?php $attributes = $__attributesOriginal10b746ef96f4e0d8a7981993158a89b4; ?>
<?php unset($__attributesOriginal10b746ef96f4e0d8a7981993158a89b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10b746ef96f4e0d8a7981993158a89b4)): ?>
<?php $component = $__componentOriginal10b746ef96f4e0d8a7981993158a89b4; ?>
<?php unset($__componentOriginal10b746ef96f4e0d8a7981993158a89b4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal973531a6f9801fe04d3a0e840c62c25d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal973531a6f9801fe04d3a0e840c62c25d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.services','data' => ['services' => $services]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('services'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($services)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal973531a6f9801fe04d3a0e840c62c25d)): ?>
<?php $attributes = $__attributesOriginal973531a6f9801fe04d3a0e840c62c25d; ?>
<?php unset($__attributesOriginal973531a6f9801fe04d3a0e840c62c25d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal973531a6f9801fe04d3a0e840c62c25d)): ?>
<?php $component = $__componentOriginal973531a6f9801fe04d3a0e840c62c25d; ?>
<?php unset($__componentOriginal973531a6f9801fe04d3a0e840c62c25d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalef4cc57ced9b28544dce586d33e591dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef4cc57ced9b28544dce586d33e591dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact','data' => ['contactInfo' => $contactInfo]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['contact-info' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($contactInfo)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef4cc57ced9b28544dce586d33e591dd)): ?>
<?php $attributes = $__attributesOriginalef4cc57ced9b28544dce586d33e591dd; ?>
<?php unset($__attributesOriginalef4cc57ced9b28544dce586d33e591dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef4cc57ced9b28544dce586d33e591dd)): ?>
<?php $component = $__componentOriginalef4cc57ced9b28544dce586d33e591dd; ?>
<?php unset($__componentOriginalef4cc57ced9b28544dce586d33e591dd); ?>
<?php endif; ?>
    </main>
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => ['contactInfo' => $contactInfo]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['contact-info' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($contactInfo)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.portfolio', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/portfolio/index.blade.php ENDPATH**/ ?>