<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#070914">
    <title>Amieyrul — Admin Login</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|space-grotesk:400,500,600,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen items-center justify-center px-5 py-12">
    <main class="w-full max-w-5xl overflow-hidden rounded-[2rem] border border-border bg-card/60 shadow-violet lg:grid lg:grid-cols-2">
        <section class="relative hidden flex-col justify-between border-r border-border bg-primary/5 p-12 lg:flex">
            <a href="{{ route('portfolio.index') }}" class="flex items-center gap-3"><img src="{{ asset('images/logo-mark.svg') }}" alt="" class="h-12 w-12"><span class="font-display text-2xl font-bold">amieyrul<span class="text-primary">.</span></span></a>
            <div class="py-16"><span class="eyebrow">Your portfolio, your workspace</span><h2 class="mt-6 text-5xl font-bold leading-tight">Keep your work<br><span class="text-gradient">up to date.</span></h2><p class="mt-6 max-w-sm text-sm leading-7 text-muted-foreground">Add your latest projects, share what you have built and keep your resume ready for the next opportunity.</p></div>
            <p class="font-mono text-xs text-muted-foreground">Mohamad Amirul Helmi / Portfolio Admin</p>
        </section>
        <section class="p-7 sm:p-12">
            <a href="{{ route('portfolio.index') }}" class="mb-10 inline-flex text-sm text-muted-foreground hover:text-primary">← Back to portfolio</a>
            {{ $slot }}
        </section>
    </main>
</body>
</html>
