<section class="py-16 mt-16" id="tickets">

  <!-- Section Header -->
  <div class="mb-2">
    <h2 class="text-2xl font-mono text-fossil uppercase">
      GET A TICKET...NOW
    </h2>
  </div>

  <!-- Ticket Options -->
  <div>
    <!-- In Person Ticket -->
    <div class="relative bg-fossil/10 p-15">
      <div class="relative">
        <!-- Title and Benefits Row -->
        <div class="flex items-center justify-between">
            <!-- IN PERSON Title -->
            <x-headline-alt text="IN PERSON" />

          <!-- Benefits Grid -->
          <div class="grid grid-cols-2 gap-y-8 gap-x-3">
            <div class="flex items-center gap-3">
              <x-icons.svg.pink-plus-sign class="w-4.5 h-4.75" />
              <span class="text-2xl text-fossil">ENTRY TO ALL THE EVENTS</span>
            </div>
            <div class="flex items-center gap-3">
              <x-icons.svg.pink-plus-sign class="w-4.5 h-4.75" />
              <span class="text-2xl text-fossil">THE SWAGGEST OF BAGS</span>
            </div>
            <div class="flex items-center gap-3">
              <x-icons.svg.pink-plus-sign class="w-4.5 h-4.75" />
              <span class="text-2xl text-fossil">FOOD AND STUFF</span>
            </div>
            <div class="flex items-center gap-3">
              <x-icons.svg.pink-plus-sign class="w-4.5 h-4.75" />
              <span class="text-2xl text-fossil">AFTER PARTY... DON'T MISS IT</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Buy Tickets Now -->
    <div class="relative">
      <div class="relative overflow-hidden h-24">
        <img src="/img/fun-colors.png" alt="" class="w-full h-full object-cover" />

        <!-- Left Side Stripes -->
        <div class="absolute left-0 top-0 w-[28%] h-full opacity-40">
          <div class="w-full h-full" style="background-image: url('/img/group-1-2.png'); background-size: cover; background-repeat: repeat; filter: brightness(0) saturate(100%) invert(0);"></div>
        </div>

        <!-- Right Side Stripes -->
        <div class="absolute right-0 top-0 w-[28%] h-full opacity-40">
          <div class="w-full h-full" style="background-image: url('/img/group-1-2.png'); background-size: cover; background-repeat: repeat; filter: brightness(0) saturate(100%) invert(0);"></div>
        </div>

        <div class="absolute inset-0 flex items-center justify-center">
          <button class="bg-transparent py-4 px-8 hover:opacity-90 transition-opacity">
            <div class="flex items-center justify-center gap-4">
              <span class="text-2xl font-bold text-plum">BUY TICKETS NOW</span>
              <div class="bg-plum px-3 py-1">
                <span class="text-2xl font-bold" style="background-image: url('/img/fun-colors.png'); background-size: 2500% 2500%; background-position: center; background-clip: text; -webkit-background-clip: text; color: transparent;">$299</span>
              </div>
            </div>
          </button>
        </div>
      </div>
    </div>

    <!-- Online Ticket -->
    <div class="flex h-23 overflow-hidden mt-4 bg-fossil">
      <!-- Left Section (3/4 width) -->
      <div class="relative w-3/4">

        <!-- ONLINE Text - Absolutely positioned to take full height -->
        <div class="absolute -left-0.5 top-2 h-full flex items-center">
          <h3 class="text-[7.5rem] text-[#2d2d2d] font-display uppercase tracking-wide translate-y-[0.10rem]">
            ONLINE
          </h3>
        </div>

        <!-- Main Text -->
          <p class="text-2xl text-[#2d2d2d] h-full text-right flex items-center justify-end pl-40 pr-12">
            GET ACCESS TO THE LIVE STREAM AND THE COMMUNITY DISCORD
          </p>
      </div>

      <!-- Right Section (1/4 width) -->
      <div class="relative w-1/4 border-l-2 border-dashed border-night-rider flex items-center justify-center p-8">
        <!-- Button Text -->
        <div class="text-2xl text-[#2d2d2d]">
          BUY ONLINE TICKET
        </div>
      </div>
    </div>
  </div>
</section>
