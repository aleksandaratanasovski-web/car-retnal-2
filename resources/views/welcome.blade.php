<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find inspiration for your next journey with Car Rental.">
    <title>Car Rental — A little more joy in the journey</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white font-sans text-[#1F2937] antialiased">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:bg-white focus:p-4">Skip to content</a>
    <header class="border-b border-[#F3D3E0] bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 sm:px-8">
            <a href="/" class="flex items-center gap-2 text-xl font-extrabold tracking-tight"><span class="flex h-9 w-9 items-center justify-center rounded-full bg-rose-ink text-white" aria-hidden="true">✳</span> car rental<span class="text-rose-ink">.</span></a>
            <nav aria-label="Main navigation" class="flex items-center gap-6 text-sm font-semibold"><a href="#explore" class="hidden hover:text-rose-ink sm:block">Explore cars</a><a href="#how-it-works" class="hidden hover:text-rose-ink sm:block">How it works</a><a href="#plan" class="rounded-full border border-[#F3D3E0] px-5 py-2.5 hover:bg-blush">Plan a trip <span aria-hidden="true">↗</span></a></nav>
        </div>
    </header>
    <main id="main">
        <section class="overflow-hidden bg-blush">
            <div class="mx-auto grid max-w-7xl items-center gap-8 px-5 pb-20 pt-14 sm:px-8 lg:grid-cols-2 lg:gap-16 lg:pb-28 lg:pt-20">
                <div><p class="mb-5 inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold uppercase tracking-[0.14em] text-rose-ink"><span aria-hidden="true">✦</span> For the road ahead</p><h1 class="max-w-xl text-5xl font-bold leading-[1.08] tracking-tight text-gray-900 sm:text-6xl">A little more joy in <span class="text-rose-ink">the journey.</span></h1><p class="mt-6 max-w-lg text-lg leading-8 text-gray-600">From weekend escapes to everyday adventures, find inspiration for a ride that feels just right.</p><div class="mt-8 flex flex-wrap items-center gap-5"><a href="#explore" class="rounded-full bg-rose-ink px-7 py-3.5 font-semibold text-white shadow-sm transition hover:bg-[#9D174D]">Explore the collection <span aria-hidden="true">→</span></a><div x-data="{ open: false }"><button type="button" @click="open = !open" :aria-expanded="open.toString()" aria-controls="journey-note" class="text-sm font-semibold text-rose-ink underline underline-offset-4">A note about this site</button><p id="journey-note" x-cloak x-show="open" class="mt-2 max-w-xs text-sm text-gray-600">This is a preview. Vehicle listings and booking are coming soon.</p></div></div></div>
                <div class="relative"><div class="absolute -right-8 -top-8 h-40 w-40 rounded-full border border-[#efc5d5]" aria-hidden="true"></div><img class="relative h-72 w-full rounded-[2rem] object-cover shadow-xl sm:h-96" src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="A car ready for a drive on an open road"><div class="absolute bottom-5 left-5 rounded-xl bg-white px-5 py-3 shadow-lg"><p class="text-xs font-semibold uppercase tracking-wider text-rose-ink">Your next chapter</p><p class="mt-1 text-sm font-bold text-gray-800">Made for getting away ↗</p></div></div>
            </div>
        </section>
        <section id="plan" aria-label="Plan your dates" class="relative z-10 mx-auto -mt-10 max-w-7xl px-5 sm:px-8"><livewire:trip-search /></section>
        <section id="explore" class="mx-auto max-w-7xl px-5 py-20 sm:px-8 sm:py-24"><div class="flex flex-wrap items-end justify-between gap-5"><div><p class="text-xs font-bold uppercase tracking-[0.18em] text-rose-ink">Find your kind of drive</p><h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A car for every story.</h2><p class="mt-4 max-w-xl text-gray-500">A little inspiration for wherever the road takes you next.</p></div><span class="text-sm font-semibold text-rose-ink">Our collection <span aria-hidden="true">↗</span></span></div>
            <div class="mt-9 grid gap-6 md:grid-cols-3">
                @foreach ([['City escapes', 'Easy-going days, made simple.', 'photo-1494976388531-d1058494cdd8'], ['Open-road adventures', 'More room for the long way round.', 'photo-1500530855697-b586d89ba3ee'], ['Weekend getaways', 'Make the most of every mile.', 'photo-1533473359331-0135ef1b58bf']] as [$title, $description, $image])
                <article class="overflow-hidden rounded-2xl border border-[#F3D3E0] bg-white shadow-sm"><img class="h-52 w-full object-cover" src="https://images.unsplash.com/{{ $image }}?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="" loading="lazy"><div class="p-6"><p class="text-xs font-bold uppercase tracking-wider text-rose-ink">Find your inspiration</p><h3 class="mt-2 text-xl font-bold text-gray-900">{{ $title }}</h3><p class="mt-2 text-sm leading-6 text-gray-500">{{ $description }}</p><p class="mt-5 border-t border-[#F3D3E0] pt-4 text-sm text-gray-500">Vehicle listings coming soon</p></div></article>
                @endforeach
            </div>
        </section>
        <section id="how-it-works" class="bg-blush"><div class="mx-auto grid max-w-7xl gap-8 px-5 py-16 sm:px-8 md:grid-cols-[1fr_2fr] md:gap-16"><div><p class="text-xs font-bold uppercase tracking-[0.18em] text-rose-ink">A little more freedom</p><h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900">The open road is calling.</h2></div><div class="grid gap-6 sm:grid-cols-2"><div><span class="text-2xl text-rose-ink" aria-hidden="true">✳</span><h3 class="mt-3 font-bold">Dream up your trip</h3><p class="mt-2 text-sm leading-6 text-gray-600">Pick your dates and start imagining the places you could go.</p></div><div><span class="text-2xl text-rose-ink" aria-hidden="true">♡</span><h3 class="mt-3 font-bold">Made for your moments</h3><p class="mt-2 text-sm leading-6 text-gray-600">We're getting ready to make finding your next ride feel effortless.</p></div></div></div></section>
    </main>
    <footer class="mx-auto flex max-w-7xl flex-wrap justify-between gap-4 px-5 py-8 text-sm text-gray-500 sm:px-8"><p class="font-bold text-gray-800">car rental<span class="text-rose-ink">.</span></p><p>Made for the journey, wherever it takes you.</p></footer>
    @livewireScripts
</body>
</html>
