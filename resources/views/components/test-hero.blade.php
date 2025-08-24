<section class="relative w-full px-20 bg-[url('/img/black-chalk-texture.jpg')] bg-cover bg-center">
  <div class="relative w-5/6">
    <!-- isolate the headline + window into the SAME stacking context -->
    <div class="relative isolate">
      <!-- IMPORTANT: make sure this wrapper doesn't set z-index or transform -->
      <div class="[z:0] will-change-auto">
        <x-headline text="A chill & awesome event" />
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

          /* Figma's blend mode applied to the whole window */
          mix-blend-mode: exclusion;
          opacity: .9;
        ">
      </div>
    </div>
  </div>
</section>
