<!-- poster.blade.php -->
<section class="w-full py-16">
    <div class="relative w-full xl:min-h-[532px] lg:min-h-[480px] md:min-h-[420px] sm:min-h-[300px] min-h-[200px]">
        <!-- WIRES + COLOR OVERLAY (cropped together) -->
        <div class="absolute right-[7.5%] top-[15%] w-[52%] aspect-[726/378] overflow-hidden z-10">
            <img src="/img/fun-wires.png"  alt="" class="absolute inset-0 size-full object-cover">
            <img src="/img/fun-colors.png" alt="" class="absolute inset-0 size-full object-cover mix-blend-exclusion pointer-events-none">
        </div>

        <div class="relative z-20">
            <div class="flex items-center gap-12 pt-[10%]">
                <x-sub-headline text="Buffalo, NY" />
                <x-sub-headline text="October 28-29, 2025" />
            </div>

            <div class="relative">
                <!-- BASE WHITE HEADLINE -->
                <x-headline
                    first="A chill & AWESOME"
                    second="Livewire community event"
                />

                <!-- RED HEADLINE, MASKED (positioned over the white one) -->
                <div
                    class="pointer-events-none absolute inset-0 z-30
                        [mask-image:url('/img/fun-colors.png')] [-webkit-mask-image:url('/img/fun-colors.png')]
                        [mask-repeat:no-repeat] [-webkit-mask-repeat:no-repeat]

                        [mask-size:calc(56%+0.4%)_auto] [-webkit-mask-size:calc(56%+0.4%)_auto]
                        [mask-position:right_7.5%_top_1%] [-webkit-mask-position:right_7.5%_top_1%]">
                    <x-headline
                        first="A chill & AWESOME"
                        second="Livewire community event"
                        plum
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center xl:gap-x-60 lg:gap-11 md:gap-2 gap-16 xl:mt-20 lg:mt-12 md:mt-8 xs:mt-8 mt-2">
        <x-sub-headline
            first="Let's hang out, and talk all things"
            second="Livewire, Flux, Alpine, and Filament"
        />

        <button class="bg-fossil px-8 py-4 hover:bg-white transition-colors grow-0">
            <x-sub-headline text="BUY TICKETS NOW" onLight />
        </button>
    </div>
</section>
