<section class="relative w-full min-h-screen px-20 py-16 bg-[url('/img/black-chalk-texture.jpg')] bg-cover bg-center">
  <div class="relative w-5/6">
    <div class="mb-10 flex gap-10">
      <x-sub-headline text="Buffalo, NY" />
      <x-sub-headline text="October 28-29, 2025" />
    </div>

    <!-- Headline + blend window share the SAME stacking context -->
    <div class="relative isolate">
      <x-headline first="A chill & awesome" second="Livewire community event" />

      <!-- COLORED WINDOW -->
      <div
        aria-hidden="true"
        class="pointer-events-none absolute inset-0 z-20 rounded [clip-path:var(--win)]"
        style="--win: inset(26% 12% 44% 34%);"
      >
        <!-- 1) Color wash → burgundy (L) to gold (R) on letters -->
        <div
          class="absolute inset-0 mix-blend-multiply"
          style="background-image:url('/img/fun-colors.png'); background-size:cover; background-position:center; filter:brightness(.95) saturate(1.15) contrast(1.06);">
        </div>

        <!-- 2) Wires only (masked), blended with EXCLUSION so lines go blue -->
        <div
          class="absolute inset-0 mix-blend-exclusion opacity-90"
          style="
            /* Use the wiring art as a LUMINANCE MASK so only bright lines show */
            -webkit-mask-image: url('/img/fun-wires.png');
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-position: 60% 42%;
            -webkit-mask-size: cover;
            mask-image: url('/img/fun-wires.png');
            mask-repeat: no-repeat;
            mask-position: 60% 42%;
            mask-size: cover;
            mask-mode: luminance;

            /* The masked layer itself is a solid plate we can hue-bias to blue */
            background: #7fb8ff;
            filter: hue-rotate(10deg) saturate(1.25) contrast(1.05);
          ">
        </div>
      </div>
    </div>

    <div class="mt-8 flex items-center gap-48">
      <x-sub-headline
        first="Let's hang out, and talk all things"
        second="Livewire, Flux, Alpine, and Filament"
      />
      <button class="bg-fossil px-8 py-4 hover:bg-white transition-colors grow-0">
        <x-sub-headline text="BUY TICKETS NOW" onLight />
      </button>
    </div>
  </div>
</section>
