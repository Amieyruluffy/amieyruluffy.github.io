@props(['contactInfo'])
<footer class="border-t border-border">
    <div class="mx-auto flex max-w-7xl flex-col gap-4 px-5 py-8 text-xs text-muted-foreground sm:flex-row sm:items-center sm:justify-between lg:px-8">
        <p>© {{ date('Y') }} Mohamad Amirul Helmi. Built with Laravel.</p>
        <div class="flex items-center gap-5"><a href="#home" class="transition hover:text-primary">Back to top ↑</a>@if($contactInfo?->github_url)<a href="{{ $contactInfo->github_url }}" target="_blank" class="transition hover:text-primary">GitHub ↗</a>@endif</div>
    </div>
</footer>
