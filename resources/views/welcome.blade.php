<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Primary Meta Tags -->
    <title>Wire ⚡ Live - A Chill & AWESOME Livewire Community Event</title>
    <meta name="title" content="Wire ⚡ Live - A Chill & AWESOME Livewire Community Event" />
    <meta name="description" content="Join us in Buffalo, NY on October 28-29, 2025 for Wire Live. Let's hang out and talk all things Livewire, Flux, Alpine, and Filament. A chill & AWESOME Livewire community event." />
    <meta name="keywords" content="Livewire, Laravel, Flux, Alpine, Filament, conference, Buffalo NY, community event, web development, PHP" />
    <meta name="author" content="Wire Live" />
    <meta name="robots" content="index, follow" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="event" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Wire ⚡ Live - A Chill & AWESOME Livewire Community Event" />
    <meta property="og:description" content="Join us in Buffalo, NY on October 28-29, 2025 for Wire Live. Let's hang out and talk all things Livewire, Flux, Alpine, and Filament." />
    <meta property="og:image" content="/img/og-image.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="Wire Live" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:event:start_time" content="2025-10-28T09:00:00-04:00" />
    <meta property="og:event:end_time" content="2025-10-29T17:00:00-04:00" />
    <meta property="og:event:location" content="Buffalo, NY" />
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:title" content="Wire ⚡ Live - A Chill & AWESOME Livewire Community Event" />
    <meta property="twitter:description" content="Join us in Buffalo, NY on October 28-29, 2025 for Wire Live. Let's hang out and talk all things Livewire, Flux, Alpine, and Filament." />
    <meta property="twitter:image" content="/img/og-image.png" />
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#1a1a1a" />
    <meta name="msapplication-TileColor" content="#1a1a1a" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('svg/favicon.svg') }}" type="image/svg+xml">
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen w-full font-body bg-night-rider
    @if(app()->environment('local'))
        {{-- @breakpoints for UI testing --}}
            after:absolute
            after:top-4
            after:right-4
            after:z-[999]
            after:size-2
            after:bg-red-500
            xs:after:bg-orange-400
            sm:after:bg-yellow-400
            md:after:bg-green-400
            lg:after:bg-blue-400
            xl:after:bg-indigo-400
            2xl:after:bg-violet-400
        {{-- @endBreakpoints --}}
    @endif
">
    {{--<x-portal-mask />--}}
    <x-header />
    <x-hero />
    <x-speakers />
    <x-schedule />
    <x-tickets />
    <x-location />
    <x-sponsors />
    <x-footer />

    {{--
    <div class="fun absolute inset-0 z-[100] bg-fossil">
        <x-header fun />
        <x-hero fun />
        <x-speakers fun />
        <x-schedule fun />
        <x-tickets fun />
        <x-location fun />
        <x-sponsors fun />
        <x-footer fun />
    </div>
    --}}

</body>
@vite(['resources/js/app.js'])

</html>
