<footer class="pt-16 pb-8" id="footer">

  <!-- Main -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-12">

    <!-- FAQs -->
    <div>
      <x-headline text="FAQS" />

      <div class="mt-8">
        <x-icons.svg.dashed-lines class="w-full h-4 text-fossil" />

        <details class="group">
          <summary class="flex items-center justify-between cursor-pointer hover:opacity-80 transition-opacity list-none p-4">
            <span class="text-lg text-fossil">
              WILL TALKS BE RECORDED?
            </span>
            <x-icons.svg.plus-sign class="w-3.5 h-3.5 transition-transform group-open:rotate-45" />
          </summary>
          <div class="px-4 pb-4">
            <p class="text-fossil leading-relaxed">
              Yes! All talks will be recorded and made available to attendees after the event.
              You'll receive access to the recordings within a week of the conference.
            </p>
          </div>
        </details>

        <x-icons.svg.dashed-lines class="w-full h-4 text-fossil" />

        <details class="group">
          <summary class="flex items-center justify-between cursor-pointer hover:opacity-80 transition-opacity list-none p-4">
            <span class="text-lg text-fossil">
              WHY BUFFALO?
            </span>
            <x-icons.svg.plus-sign class="w-3.5 h-3.5 transition-transform group-open:rotate-45" />
          </summary>
          <div class="px-4 pb-4">
            <p class="text-fossil">
              Buffalo is a vibrant, affordable city with a growing tech scene.
              It's easily accessible with an international airport, has great food and culture,
              and provides the perfect backdrop for an intimate, focused conference experience.
            </p>
          </div>
        </details>

        <x-icons.svg.dashed-lines class="w-full h-4 text-fossil" />
      </div>
    </div>

    <!-- Travel + Hotel Section -->
    <div>
      <x-headline text="TRAVEL + HOTEL" />

      <p class="text-xl text-fossil font-mono leading-relaxed mt-8">
        Buffalo has an international Airport to fly into. It's 15 minutes from downtown.
        We will have a room block at the walkable Statler hotel. There are plenty of other hotels in the area.
      </p>
    </div>

  </div>

  <!-- Credits -->
  <div class="relative flex items-end justify-between gap-8 pt-8">

    <!-- Copyright -->
    <div class="text-sm text-fossil">
      All rights reserved © 2025
    </div>

    <!-- Collaboration Credit -->
    <div class="text-sm text-fossil font-mono">
        A <span class="underline">Dope Boys</span> Collaboration
    </div>

    <!-- Speech Bubble -->
    <div class="absolute bottom-6 right-0">
      <div class="relative" style="
          background-image: url('/img/fun-colors.png');
          background-size: cover;
          background-position: center;
          clip-path: polygon(
              0% 0%,
              100% 0%,
              100% 36px,
              64.5% 36px,
              61.5% 44px,
              58.5% 36px,
              0% 36px
          );
          ">
        <div class="relative h-11">
            <div class="px-4 py-2 flex items-center gap-8 flex-row justify-center">
            <div class="flex items-center gap-3">
                <x-icons.svg.dope.will class="mix-blend-exclusion" />
                <span class="text-sm text-nowrap">by Will King</span>
            </div>
            <div class="flex items-center gap-3">
                <x-icons.svg.dope.caleb class="mix-blend-exclusion" />
                <span class="text-sm text-[#58003f] text-nowrap">by Caleb Porzio</span>
            </div>
            <div class="flex items-center gap-3">
                <x-icons.svg.dope.thunk class="mix-blend-exclusion" />
                <span class="text-sm text-[#58003f] text-nowrap">by Thunk</span>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>

</footer>
