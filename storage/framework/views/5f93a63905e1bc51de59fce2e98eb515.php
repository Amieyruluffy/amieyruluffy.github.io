<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($title ?? 'Mohamad Amirul Helmi — Software Engineer'); ?></title>
    <meta name="description" content="Portfolio of Mohamad Amirul Helmi — Software Engineer, web developer and Computer Science graduate.">
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('favicon.svg')); ?>">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|space-grotesk:400,500,600,700|jetbrains-mono:400,500,600&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <div class="site-grid pointer-events-none fixed inset-0 z-[-1] opacity-70"></div>
    <div class="pointer-events-none fixed left-1/2 top-0 z-[-1] h-[28rem] w-[28rem] -translate-x-1/2 rounded-full bg-primary/10 blur-[120px]"></div>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\Users\ASUS\Herd\amieyrul.portfolio\resources\views/layouts/portfolio.blade.php ENDPATH**/ ?>