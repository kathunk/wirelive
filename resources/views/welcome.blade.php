<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Wire ⚡ Live</title>
    @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen w-full font-body bg-night-rider
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
">
    <div class="max-w-[94.5rem] h-full mx-auto px-4 md:px-6 lg:px-20">
        <x-header />
        <x-hero />
        <x-speakers />
        <x-schedule />
        <x-tickets />
        <x-location />
        <x-sponsors />
        <x-footer />
    </div>

    <div class="fun absolute inset-0 z-[100] bg-fossil">
        <div class="max-w-[94.5rem] h-full mx-auto px-4 md:px-6 lg:px-20">
            <x-header fun />
            <x-hero />
            <x-speakers />
            <x-schedule />
            <x-tickets />
            <x-location />
            <x-sponsors />
            <x-footer />
        </div>
    </div>

</body>

</html>