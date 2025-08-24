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
        ">

        <!-- Gradient with exclusion for text effect -->
        <div
          class="absolute inset-0 mix-blend-exclusion"
          style="
            background-image: url('/img/fun-colors.png');
            background-size: cover;
            background-position: center;
          ">
        </div>

        <!-- Wiring on top with screen for visibility -->
        <div
          class="absolute inset-0 mix-blend-screen"
          style="
            background-image: url('/img/fun-wires.png');
            background-size: cover;
            background-position: center;
          ">
        </div>
      </div>
    </div>
  </div>
</section>
