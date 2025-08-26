@props([
    'fun' => false
])


<section class="w-full py-16 {{ $fun ? 'bg-plum' : '' }}">
    <div class="relative w-full xl:min-h-[532px] lg:min-h-[480px] md:min-h-[420px] sm:min-h-[300px] min-h-[200px]">
        <div class="relative z-20">
            <div class="flex items-center gap-12 pt-[10%]">
                <x-sub-headline text="Buffalo, NY" />
                <x-sub-headline text="October 28-29, 2025" />
            </div>

            <x-headline first="A chill & AWESOME" second="Livewire community event" />
        </div>
    </div>

    <div
        class="flex flex-col md:justify-between lg:justify-start md:flex-row md:items-center xl:gap-x-60 lg:gap-11 md:gap-2 gap-8 xl:mt-20 lg:mt-12 md:mt-8 xs:mt-8 mt-2">
        <x-sub-headline first="Let's hang out, and talk all things" second="Livewire, Flux, Alpine, and Filament" />

        <button class="bg-fossil px-8 py-4 hover:bg-white transition-colors grow-0">
            <x-sub-headline text="BUY TICKETS NOW" onLight />
        </button>
    </div>
</section>
