@props([
    'fun' => false
])

@php
    $platinum = [
        'tighten' => 'https://tighten.com',
        'tba',
        'blank',
    ];

    $community = [
        'tba',
        'blank',
        'blank',
    ];

    $friend = [
        'tba',
        'blank',
        'blank',
        'blank',
    ];

    $textColor = $fun ? 'text-plum' : 'text-fossil';
    $linkColor = $fun ? 'text-cobalt hover:text-plum' : 'text-fossil hover:opacity-90';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<section class="py-16 mt-16" id="sponsors">
    <x-container>
        <!-- Section Header -->
        <div class="text-left mb-16">
            <span class="hidden md:block">
                <x-headline text="WOULDN'T BE POSSIBLE WITHOUT" fun="{{ $fun }}" />
            </span>
            <span class="block md:hidden">
                <x-headline first="WOULDN'T BE POSSIBLE" second="WITHOUT" fun="{{ $fun }}" />
            </span>
        </div>

        @if($platinum)
            <!-- Platinum Sponsors -->
            <div class="text-center">
                <h3 class="text-2xl text-left {{ $textColor }} mb-3 uppercase">
                    Platinum
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3.75">
                    @foreach($platinum as $name => $url)
                        @if($url !== 'tba' && $url !== 'blank')
                            <x-sponsor :name="$name" :url="$url" tier="platinum" fun="{{ $fun }}" />
                        @elseif($url === 'tba')
                            <x-tba-sponsor :name="$name" tier="community" fun="{{ $fun }}" />
                        @elseif($url === 'blank')
                            <x-blank-sponsor :name="$name" tier="community" fun="{{ $fun }}" />
                        @endif
                    @endforeach
                </div>
            </div>
        @endif

        @if($community || $friend)
            <div class="flex flex-col xs:flex-row md:flex-col gap-y-12 pt-12 w-full gap-x-4">
                @if($community)
                    <!-- Community Sponsors -->
                    <div class="text-center w-full">
                        <h3 class="text-2xl text-left {{ $textColor }} mb-3 uppercase xs:max-w-[13ch] md:max-w-none">
                            Community Champion
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3.75">
                            @foreach($community as $name => $url)
                                @if($url !== 'tba' && $url !== 'blank')
                                    <x-sponsor :name="$name" :url="$url" tier="community" fun="{{ $fun }}" />
                                @elseif($url === 'tba')
                                    <x-tba-sponsor :name="$name" tier="community" fun="{{ $fun }}" />
                                @elseif($url === 'blank')
                                    <x-blank-sponsor :name="$name" tier="community" fun="{{ $fun }}" />
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
                @if($friend)
                    <!-- Friend Sponsors -->
                    <div class="w-full">
                        <h3 class="text-2xl text-left {{ $textColor }} mb-3 uppercase xs:max-w-[13ch] md:max-w-none">
                            Friend of the Conference
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-3.75">
                            @foreach($friend as $name => $url)
                                @if($url !== 'tba' && $url !== 'blank')
                                    <x-sponsor :name="$name" :url="$url" tier="friend" fun="{{ $fun }}" />
                                @elseif($url === 'tba')
                                    <x-tba-sponsor :name="$name" tier="friend" fun="{{ $fun }}" />
                                @elseif($url === 'blank')
                                    <x-blank-sponsor :name="$name" tier="friend" fun="{{ $fun }}" />
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <!-- Call to Action -->
        {{-- <div class="flex items-center gap-4 mt-24">
            <span class="text-base {{ $textColor }}">Interested in supporting?</span>
            <a href="#" class="relative text-base {{ $linkColor }} transition-colors">
                Become a sponsor
                <img class="absolute bottom-0 left-0 w-full h-1 object-cover {{ $imageFilter }}" src="/img/fun-colors.png" alt="" />
            </a>
        </div> --}}
    </x-container>
</section>
