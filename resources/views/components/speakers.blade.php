@props([
    'fun' => false
])

@php
    $textColor = $fun ? 'text-plum' : 'text-fossil';
    $linkColor = $fun ? 'text-cobalt hover:text-plum' : 'text-fossil hover:opacity-90';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<section class="py-16 mt-16" id="speakers">
    <x-container>
        <!-- Section header -->
        <div class="text-left flex flex-col xl:flex-row xl:items-end justify-between mb-16 w-full gap-y-8 gap-x-16">
            <div class="xl:self-end">
                <x-headline text="The Speakers" fun="{{ $fun }}" />
            </div>
            <div class="flex flex-col justify-between gap-4 w-full xl:self-end">
                <span class="text-2xl {{ $textColor }}">MEMBERS OF THE COMMUNITY YOU KNOW AND LOVE</span>
                <div class="flex items-center gap-4 w-full">
                    <img class="min-w-0 flex-1 h-14 object-cover {{ $imageFilter }}" src="/img/group-1-2.png" alt="line" />
                    <img class="w-14 h-14 flex-shrink-0 {{ $imageFilter }}" src="/svg/arrow-down-left.svg" alt="checkmark" />
                </div>
            </div>
        </div>

        <div class="font-mono text-xl mb-16 {{ $textColor }}">
            We want everybody to leave with a fresh heap of Livewire knowledge and enthusiasm. We’ll have  10 minute “hot&#8209;tip” talks, full conference talks, and a keynote from Caleb Porzio where he will give a tour of Livewire 4 and tag a beta release live on-stage. You don’t want to miss it.
        </div>

        <!-- Speakers grid -->
        <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
            <x-speaker
                name="Caleb Porzio"
                imageSrc="/img/speakers/caleb.png"
                :$imageFilter
                :$textColor
            >
                Creator of <x-link href="https://livewire.laravel.com">Livewire</x-link>
            </x-speaker>

            <x-speaker
                name="Daniel Coulbourne"
                imageSrc="/img/speakers/daniel.jpg"
                imageClasses="object-[50%_25%] md:object-center"
                :$imageFilter
                :$textColor
            >
                Partner / Dev at <x-link href="https://thunk.dev">Thunk</x-link>
            </x-speaker>

            <x-speaker
                name="Matt Stauffer"
                imageSrc="/img/speakers/matt.png"
                imageClasses="brightness-88 object-[50%_25%] md:object-center"
                :$imageFilter
                :$textColor
            >
                CEO at <x-link href="https://tighten.com">Tighten</x-link>
            </x-speaker>

            <x-speaker
                name="Dan Harrin"
                imageSrc="/img/speakers/dan.jpg"
                imageClasses="object-[50%_25%] md:object-center"
                :$imageFilter
                :$textColor
            >
                Software Engineer at <x-link href="https://canyongbs.com">Canyon GBS,</x-link><br class="hidden lg:inline-block"> Co-creator of <x-link href="https://filamentphp.com">Filament</x-link>
            </x-speaker>

            <x-speaker
                name="Josh Cirre"
                imageSrc="/img/speakers/josh.png"
                imageClasses="object-top"
                :$imageFilter
                :$textColor
            >
                Developer Relations Engineer at <x-link href="https://laravel.com">Laravel</x-link>
            </x-speaker>

            <x-speaker
                name="Jason McCreary"
                imageSrc="/img/speakers/jason.png"
                imageClasses="object-[50%_10%] md:object-top"
                :$imageFilter
                :$textColor
            >
                Creator of <x-link href="https://laravelshift.com/">Laravel Shift,</x-link>producer of <x-link href="https://gettinggit.com/">Getting Git,</x-link>and author of <x-link href="https://basecodefieldguide.com/">BaseCode</x-link>
            </x-speaker>

            <x-speaker
                name="Shane Rosenthal"
                imageSrc="/img/speakers/shane.png"
                :$imageFilter
                :$textColor
            >
                Co-founder of <x-link href="https://nativephp.com/">NativePHP</x-link>
            </x-speaker>

            <x-speaker
                name="Katie Wright"
                imageSrc="/img/speakers/katie.png"
                imageClasses="object-[50%_35%] md:object-center"
                :$imageFilter
                :$textColor
            >
                Full-stack Laravel Developer at <x-link href="https://honorlock.com/">Honorlock</x-link>
            </x-speaker>

            <x-speaker
                name="Ryan Chandler"
                imageSrc="/img/speakers/ryan.png"
                imageClasses="object-top"
                :$imageFilter
                :$textColor
            >
                Senior Software Engineer at <x-link href="https://laravel.com">Laravel</x-link>
            </x-speaker>

            <x-speaker
                name="Filip Ganyicz"
                imageSrc="/img/speakers/filip.png"
                imageClasses="object-[50%_35%] md:object-center"
                :$imageFilter
                :$textColor
            >
                Creator of <x-link href="https://github.com/ganyicz/bond">Bond</x-link>
            </x-speaker>

            <x-speaker
                name="Mary Perry"
                imageSrc="/img/speakers/mary.png"
                imageClasses="object-[50%_40%] md:object-center"
                :$imageFilter
                :$textColor
            >
                Syntax Professional && Semantics Enthusiast
            </x-speaker>

            <x-speaker
                name="Andy Newhouse"
                imageSrc="/img/speakers/andy.png"
                imageClasses="object-[50%_15%] md:object-center"
                :$imageFilter
                :$textColor
            >
                Lead Programmer at <x-link href="https://tighten.com">Tighten</x-link>
            </x-speaker>

            <x-speaker
                name="Kevin McKee"
                imageSrc="/img/speakers/kevin.png"
                imageClasses="object-top md:object-center"
                :$imageFilter
                :$textColor
            >
                Co-founder and CIO of <x-link href="https://www.padmission.com/">Padmission</x-link>
            </x-speaker>

            <x-speaker
                name="TBA"
                title="SOMEONE DOPE"
                imageSrc="/img/speakers/tba.png"
                :$imageFilter
                :$textColor
            >
                Who Does Things
            </x-speaker>

            <x-speaker
                name="TBA"
                title="AWESOME PERSON"
                imageSrc="/img/speakers/tba.png"
                :$imageFilter
                :$textColor
            >
                With Interesting Ideas
            </x-speaker>
        </div>

        <div class="lg:text-7xl md:text-5xl sm:text-5xl text-2xl uppercase {{ $textColor }} text-center mt-18 mb-16">
            More speakers dropping soon
        </div>

        <!-- Call to action -->
        {{-- <div class="flex items-center gap-4 mt-14 justify-center">
            <span class="text-base {{ $textColor }}">Interested in speaking?</span>
            <a href="#" class="relative text-base {{ $linkColor }} transition-colors">
                Apply to speak
                <img class="absolute bottom-0 left-0 w-full h-1 object-cover {{ $imageFilter }}" src="/img/fun-colors.png" alt="" />
            </a>
        </div> --}}
    </x-container>
</section>
