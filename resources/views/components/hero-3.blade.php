<section class="relative w-full min-h-screen px-20 py-16 bg-[url('/img/black-chalk-texture.jpg')] bg-cover bg-center">
  <div class="relative w-5/6">
    <div class="mb-10 flex gap-10">
      <x-sub-headline text="Buffalo, NY" />
      <x-sub-headline text="October 28-29, 2025" />
    </div>

    <!-- isolate the headline + window into the SAME stacking context -->
    <div class="relative isolate">
      <!-- IMPORTANT: make sure this wrapper doesn't set z-index or transform -->
      <div class="[z:0] will-change-auto">
        <x-headline first="A chill & awesome" second="Livewire community event" />
      </div>

      <!-- the colored window: ABOVE the headline, blends only with it -->
      <div
        aria-hidden="true"
        class="pointer-events-none absolute z-[999] rounded [clip-path:var(--win)]"
        style="
          /* position the window (top right bottom left) */
          --win: inset(26% 12% 44% 34%);
          inset: 0;

          /* two layers inside the window (do NOT pre-blend them) */
          background-image: url('/img/fun-colors.png'), url('/img/fun-wires.png');
          background-size: cover, cover;
          background-position: center, 60% 42%;
          background-repeat: no-repeat, no-repeat;

          /* Use overlay blend mode instead of exclusion for better text interaction */
          mix-blend-mode: overlay;
          opacity: .9;
        ">
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
