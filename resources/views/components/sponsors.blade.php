@props([
    'fun' => false
])

@php
    $platinum = [
        'laravel' => 'https://laravel.com',
        'vehikl' => 'https://vehikl.com',
        'tighten' => 'https://tighten.com'
    ];

    $gold = [
        'jetbrains' => 'https://jetbrains.com',
        'canyon' => 'https://canyon.com',
        'in' => 'https://in.com'
    ];

    $community = [
        'laravel' => 'https://laravel.com',
        'vehikl' => 'https://vehikl.com',
        'jetbrains' => 'https://jetbrains.com',
        'canyon' => 'https://canyon.com'
    ];

    $textColor = $fun ? 'text-plum' : 'text-fossil';
    $linkColor = $fun ? 'text-cobalt hover:text-plum' : 'text-fossil hover:opacity-90';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<section class="py-16 mt-16" id="sponsors">
    <x-container>
        <!-- Section Header -->
        <div class="text-left mb-16">
            <x-headline text="WOULDN'T BE POSSIBLE WITHOUT" fun="{{ $fun }}" />
        </div>

        <!-- Platinum Sponsors -->
        <div class="text-center">
            <h3 class="text-2xl text-left {{ $textColor }} mb-3 uppercase">
                PLATINUM
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3.75">
                @foreach($platinum as $name => $url)
                    <x-sponsor :name="$name" :url="$url" tier="platinum" fun="{{ $fun }}" />
                @endforeach
            </div>
        </div>

        <!-- Gold Sponsors -->
        <div class="flex flex-col xs:flex-row md:flex-col gap-y-12 pt-12 w-full gap-x-4">
            <div class="text-center w-full">
                <h3 class="text-2xl text-left {{ $textColor }} mb-3 uppercase">
                    GOLD
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3.75">
                    @foreach($gold as $name => $url)
                        <x-sponsor :name="$name" :url="$url" tier="gold" fun="{{ $fun }}" />
                    @endforeach
                </div>
            </div>

            <!-- Community Sponsors -->
            <div class="text-center w-full">
                <h3 class="text-2xl text-left {{ $textColor }} mb-3 uppercase">
                    COMMUNITY
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-3.75">
                    @foreach($community as $name => $url)
                        <x-sponsor :name="$name" :url="$url" tier="community" fun="{{ $fun }}" />
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="flex items-center gap-4 mt-24">
            <span class="text-base {{ $textColor }}">Interested in supporting?</span>
            <a href="#" class="relative text-base {{ $linkColor }} transition-colors">
                Become a sponsor
                <img class="absolute bottom-0 left-0 w-full h-1 object-cover {{ $imageFilter }}" src="/img/fun-colors.png" alt="" />
            </a>
        </div>
    </x-container>
</section>
