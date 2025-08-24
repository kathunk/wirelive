<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen w-full font-body bg-night-rider/90" style="background-image: url('/img/dirty-surface-texture.png'); background-size: cover; background-position: center;">
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
    </body>
</html>
