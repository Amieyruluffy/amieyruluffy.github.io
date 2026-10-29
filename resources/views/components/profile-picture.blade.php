@php
    $uploadedPicture = \Illuminate\Support\Facades\Storage::disk('public')->exists('branding/avatar.png');
    $pictureUrl = $uploadedPicture
        ? asset('storage/branding/avatar.png').'?v='.\Illuminate\Support\Facades\Storage::disk('public')->lastModified('branding/avatar.png')
        : asset('images/avatar.png');
@endphp
<span class="inline-flex">
    <button type="button" {{ $attributes->class(['overflow-hidden rounded-full border border-primary/25']) }} aria-label="View profile picture" onclick="this.nextElementSibling.showModal()">
        <img src="{{ $pictureUrl }}" alt="Amirul Helmi" class="h-full w-full rounded-full object-cover">
    </button>
    <dialog aria-label="Amirul Helmi profile picture" class="m-auto w-[18rem] max-w-[calc(100vw-2rem)] rounded-2xl border border-primary/25 bg-background p-4 text-foreground shadow-xl backdrop:bg-black/60" onclick="if (event.target === this) this.close()">
        <div class="mb-3 flex items-center justify-between gap-3">
            <span class="text-sm font-semibold">Amirul Helmi</span>
            <button type="button" autofocus aria-label="Close profile picture" class="rounded-lg px-2 py-1 text-lg" onclick="this.closest('dialog').close()">&times;</button>
        </div>
        <img src="{{ $pictureUrl }}" alt="Amirul Helmi profile picture" class="aspect-square w-full rounded-xl object-cover">
    </dialog>
</span>
