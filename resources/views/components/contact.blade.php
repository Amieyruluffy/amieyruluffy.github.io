@props(['contactInfo'])
<section id="contact" class="scroll-mt-24 border-t border-border">
    <div class="mx-auto max-w-7xl px-5 py-24 lg:px-8 lg:py-32">
        <div class="relative overflow-hidden rounded-[2rem] border border-primary/20 bg-primary/[.06] p-7 sm:p-10 lg:p-14">
            <div class="absolute -right-24 -top-24 size-72 rounded-full bg-primary/15 blur-3xl"></div>
            <div class="relative grid gap-12 lg:grid-cols-[1.1fr_.9fr] lg:items-end">
                <div><span class="eyebrow">06 / Contact</span><h2 class="mt-6 max-w-3xl text-4xl font-bold sm:text-6xl">Have a project in mind?<br><span class="text-primary">Let's build it.</span></h2><p class="mt-6 max-w-xl text-sm leading-7 text-muted-foreground">I'm open to software development, web development and IT-related opportunities.</p></div>
                <div class="space-y-3 text-sm">
                    <a href="mailto:{{ $contactInfo?->email ?? 'aamieyruljr@gmail.com' }}" class="glass block rounded-2xl p-5 transition hover:border-primary/30"><span class="number">EMAIL</span><p class="mt-2 font-semibold break-all">{{ $contactInfo?->email ?? 'aamieyruljr@gmail.com' }}</p></a>
                    <a href="tel:{{ preg_replace('/\D+/', '', $contactInfo?->phone ?? '01137267929') }}" class="glass block rounded-2xl p-5 transition hover:border-primary/30"><span class="number">PHONE</span><p class="mt-2 font-semibold">{{ $contactInfo?->phone ?? '+60 11-37267929' }}</p></a>
                    <div class="glass rounded-2xl p-5"><span class="number">LOCATION</span><p class="mt-2 font-semibold">{{ $contactInfo?->location ?? 'Ipoh, Perak' }}</p></div>
                </div>
            </div>
        </div>
    </div>
</section>
