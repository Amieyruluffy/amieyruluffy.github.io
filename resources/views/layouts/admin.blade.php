<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#070914">
    <title>Amieyrul — Portfolio Admin</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|space-grotesk:400,500,600,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{ menuOpen: false }">
    @php
        $adminLinks = [
            ['Dashboard', 'admin.dashboard', 'admin.dashboard'],
            ['Projects', 'admin.projects.index', 'admin.projects.*'],
            ['Resume', 'admin.resume.edit', 'admin.resume.*'],
            ['Hero', 'admin.hero.edit', 'admin.hero.*'],
            ['About', 'admin.about.edit', 'admin.about.*'],
            ['Skills', 'admin.skills.index', 'admin.skills.*'],
            ['Experience', 'admin.experiences.index', 'admin.experiences.*'],
            ['Services', 'admin.services.index', 'admin.services.*'],
            ['Testimonials', 'admin.testimonials.index', 'admin.testimonials.*'],
            ['Messages', 'admin.contact.messages', 'admin.contact.messages*'],
            ['Contact details', 'admin.contact.info', 'admin.contact.info'],
        ];
    @endphp
    <div class="min-h-screen lg:grid lg:grid-cols-[16rem_1fr]">
        <aside class="border-r border-border bg-card/70 p-5 lg:sticky lg:top-0 lg:h-screen lg:overflow-y-auto">
            <div class="flex items-center justify-between gap-3">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <img src="{{ asset('images/logo-mark.svg') }}" alt="Amieyrul" class="h-11 w-11 rounded-xl">
                    <span class="font-display text-lg font-bold">amieyrul<span class="text-primary">.</span><span class="block text-xs font-normal text-muted-foreground">Portfolio workspace</span></span>
                </a>
                <button type="button" @click="menuOpen = !menuOpen" :aria-expanded="menuOpen" aria-controls="admin-navigation" class="btn-outline px-3 py-2 lg:hidden">Menu</button>
            </div>
            <nav id="admin-navigation" :class="menuOpen ? 'block' : 'hidden'" class="mt-8 space-y-1 lg:!block" aria-label="Admin navigation">
                @foreach($adminLinks as [$label, $routeName, $routePattern])
                    <a href="{{ route($routeName) }}" @class(['block rounded-xl px-4 py-3 text-sm transition', 'border border-primary/20 bg-primary/10 font-semibold text-primary' => request()->routeIs($routePattern), 'text-muted-foreground hover:bg-white/5 hover:text-foreground' => !request()->routeIs($routePattern)]) @if(request()->routeIs($routePattern)) aria-current="page" @endif>{{ $label }}</a>
                @endforeach
                <div class="mt-6 border-t border-border pt-4">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-3 text-sm text-muted-foreground hover:text-primary">Account & password</a>
                    <form method="POST" action="{{ route('logout') }}">@csrf<button class="w-full px-4 py-3 text-left text-sm text-muted-foreground hover:text-primary">Sign out</button></form>
                </div>
            </nav>
        </aside>
        <main class="min-w-0">
            <header class="flex flex-wrap items-center justify-between gap-3 border-b border-border px-6 py-5 lg:px-10">
                <span class="text-sm text-muted-foreground">{{ auth()->user()->name }}</span>
                <a href="{{ route('portfolio.index') }}" target="_blank" rel="noopener" class="btn-secondary py-2">View portfolio ↗</a>
            </header>
            <div class="mx-auto max-w-7xl px-5 py-8 lg:p-10">
                @if(session('success'))<div role="status" class="mb-6 rounded-xl border border-primary/30 bg-primary/10 p-4 text-sm">{{ session('success') }}</div>@endif
                @if($errors->any())<div role="alert" class="mb-6 rounded-xl border border-red-400/30 bg-red-400/10 p-4"><ul class="list-inside list-disc text-sm text-red-300">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
                @yield('admin-content')
            </div>
        </main>
    </div>
</body>
</html>
