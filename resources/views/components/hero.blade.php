<!-- poster.blade.php -->
<section class="w-full py-16">
    <!-- WIRES + COLOR OVERLAY (cropped together) -->
    <!-- Overlay box: right: 6%, top: 8%, width: 56% -->
    <div class="relative isolate w-full aspect-[1296/532]">
        <div class="absolute right-[10.5%] top-[12.5%] w-[52%] aspect-[726/378] overflow-hidden z-10">
            <img src="/img/fun-wires.png"  alt="" class="absolute inset-0 size-full object-cover">
            <img src="/img/fun-colors.png" alt="" class="absolute inset-0 size-full object-cover mix-blend-exclusion pointer-events-none">
        </div>

        <div class="absolute top-[20%] left-0 flex items-center gap-12 z-20">
            <x-sub-headline text="Buffalo, NY" />
            <x-sub-headline text="October 28-29, 2025" />
        </div>

        <!-- BASE WHITE HEADLINE -->
        <div class="absolute top-[30%] left-0 flex items-center z-20">
            {{-- <h1 class="font-black leading-[0.85] tracking-tight text-white text-[clamp(40px,9vw,180px)]">
                A CHILL & AWESOME<br>
                LIVEWIRE COMMUNITY EVENT
            </h1> --}}
            <h1 class="text-headline leading-45 font-normal text-fossil tracking-normal font-display uppercase">
                A CHILL & AWESOME<br>
                LIVEWIRE COMMUNITY EVENT
            </h1>
        </div>

        <!-- RED HEADLINE, MASKED (hardcoded alignment) -->
        <!-- Use the SAME overlay image as a mask, positioned/sized to the overlay box -->
        <div
            class="pointer-events-none absolute inset-0 z-30
                [mask-image:url('/img/fun-colors.png')] [-webkit-mask-image:url('/img/fun-colors.png')]
                [mask-repeat:no-repeat] [-webkit-mask-repeat:no-repeat]

                [mask-size:calc(56%+0.4%)_auto] [-webkit-mask-size:calc(56%+0.4%)_auto]
                [mask-position:right_14.5%_top_21%] [-webkit-mask-position:right_14.5%_top_21%]">
            <div class="absolute top-[30%] left-0 flex items-center">
                {{-- <h1 class="font-black leading-[0.85] tracking-tight text-red-600 text-[clamp(40px,9vw,180px)]">
                    A CHILL & AWESOME<br>
                    LIVEWIRE COMMUNITY EVENT
                </h1> --}}
                <h1 class="text-headline leading-45 font-normal text-plum tracking-normal font-display uppercase">
                A CHILL & AWESOME<br>
                    LIVEWIRE COMMUNITY EVENT
                </h1>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-48">
        <x-sub-headline
            first="Let's hang out, and talk all things"
            second="Livewire, Flux, Alpine, and Filament"
        />

        <button class="bg-fossil px-8 py-4 hover:bg-white transition-colors grow-0">
            <x-sub-headline text="BUY TICKETS NOW" onLight />
        </button>
    </div>
</section>
