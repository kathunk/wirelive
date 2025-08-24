<!-- poster.blade.php -->
<div class="relative mx-auto w-full max-w-[1200px] aspect-[1296/532] overflow-hidden isolate">
    <!-- WIRES + COLOR OVERLAY (cropped together) -->
    <!-- Overlay box: right: 6%, top: 8%, width: 56% -->
    <div class="absolute right-[6%] top-[8%] w-[56%] aspect-[726/378] overflow-hidden z-10">
        <img src="/img/fun-wires.png"  alt="" class="absolute inset-0 size-full object-cover">
        <img src="/img/fun-colors.png" alt="" class="absolute inset-0 size-full object-cover mix-blend-exclusion pointer-events-none">
    </div>

    <!-- BASE WHITE HEADLINE -->
    <div class="absolute top-[30%] left-[3%] flex items-center z-20">
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
            [mask-position:left_87%_top_27%] [-webkit-mask-position:left_87%_top_27%]">
        <div class="absolute top-[30%] left-[3%] flex items-center">
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

    <!-- Optional meta -->
    <div class="absolute left-[3%] top-[6%] text-white/80 text-sm md:text-base z-20">
        BUFFALO, NY • OCTOBER 28–29, 2025
    </div>
</div>
