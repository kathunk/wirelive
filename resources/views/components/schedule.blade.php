<section class="py-16">

  <!-- Section Header -->
  <div class="text-left mb-16">
    <x-headline text="THE SCHEDULE" />
  </div>

  <!-- Two Parallel Sections -->
  <div class="flex flex-col lg:flex-row justify-between">

    <!-- Day 01 - Schedule Section -->
    <div class="w-[64.69%]">
      <div class="flex flex-col w-full">
        <!-- Ticket Tab -->
        <div class="relative w-61.75 -mb-px">
            <x-icons.svg.ticket-tab class="w-61.75 h-12" />
            <div class="absolute left-6 top-3">
                <span class="text-[44px] leading-none font-normal tracking-normal font-display uppercase">
                    Day 01
                </span>
            </div>
            <div class="absolute bottom-0 right-0 w-3/7">
                <x-icons.svg.ticket-tab-tear class="mb-px w-full" />
            </div>
        </div>
        <!-- Card Content -->
        <div class="w-full bg-fossil">
            <div class="text-night-rider py-4">
              <!-- Schedule items -->
              <div class="flex items-center justify-between px-6 py-4">
                <div class="text-lg font-body">COFFEE & CHILL</div>
                <div class="text-lg font-medium font-mono">9:00 AM - 9:45 AM</div>
              </div>

              <x-icons.svg.dashed-lines class="w-full h-4" />

              <div class="flex items-center justify-between px-6 py-4">
                <div class="text-lg font-body">OPENING REMARKS</div>
                <div class="text-lg font-medium font-mono">9:00 AM - 9:45 AM</div>
              </div>

              <x-icons.svg.dashed-lines class="w-full h-4" />

              <div class="flex items-center justify-between px-6 py-4">
                <div class="text-lg font-body">WELCOME CALEB PORZIO</div>
                <div class="text-lg font-medium font-mono">9:00 AM - 9:45 AM</div>
              </div>

              <x-icons.svg.dashed-lines class="w-full h-4" />

              <div class="flex items-center justify-between px-6 py-4">
                <div class="text-lg font-body">CROWD SOURCING COMPONENTS PATRICIO</div>
                <div class="text-lg font-medium font-mono">9:00 AM - 9:45 AM</div>
              </div>

              <x-icons.svg.dashed-lines class="w-full h-4" />

              <div class="flex items-center justify-between px-6 py-4">
                <div class="text-lg font-body">DATATABLES AT THE SNAP OF A FINGER KEVIN MCKEE</div>
                <div class="text-lg font-medium font-mono">9:00 AM - 9:45 AM</div>
              </div>

              <x-icons.svg.dashed-lines class="w-full h-4" />

              <div class="flex items-center justify-between px-6 py-4">
                <div class="text-lg font-body">SQUEEZING EVERY DROP OF PERFORMANCE RYAN CHRISOLOR</div>
                <div class="text-lg font-medium font-mono">2:00 PM - 3:00 PM</div>
              </div>

              <x-icons.svg.dashed-lines class="w-full h-4" />

              <div class="flex items-center justify-between px-6 py-4">
                <div class="text-lg font-body">WHAT'S COMING TO FILAMENT DAN HARRIN</div>
                <div class="text-lg font-medium font-mono">3:00 PM - 4:00 PM</div>
              </div>

              <x-icons.svg.dashed-lines class="w-full h-4" />

              <div class="flex items-center justify-between px-6 py-4">
                <div class="text-lg font-body">BUILD A FUSION SEARCH WITH ALGORITHMS JOHN CAROLES</div>
                <div class="text-lg font-medium font-mono">4:00 PM - 5:00 PM</div>
              </div>
            </div>
        </div>

        <img src="/img/rip.png" alt="rip.png" class="w-full h-20 -mt-1" />
      </div>
    </div>

    <!--
        @todo figure out how we can only apply the background image to the
        card and tab but not the empty area beside the tab
    -->

    <!-- Day 02 - Hackathon Section -->
    <div class="w-[29.38%]">
      <div class="flex flex-col w-full">
        <!-- Ticket Tab -->
        <div class="relative w-61.75 -mb-px">
            <x-icons.svg.ticket-tab class="w-61.75 h-12" pink />
            <div class="absolute left-6 top-3">
                <span class="text-[44px] leading-none font-normal tracking-normal font-display uppercase text-plum">
                    Day 02
                </span>
            </div>
            <div class="absolute bottom-0 right-0 w-3/7">
                <x-icons.svg.ticket-tab-tear class="mb-px w-full" />
            </div>
        </div>
        <!-- Card Content -->
        <div class="p-6 w-full" style="background-image: url('/img/fun-colors.png'); background-size: cover; background-position: center;">
          <h2 class="text-[92px] leading-26 font-body text-plum py-5">
            HACK-A-THON
          </h2>

          <p class="text-xl leading-relaxed font-body">
            We rented a space out to chill, eat buffalo wings and play our collaboratively.
            We'll make a game or something and have prizes or whatever.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>
