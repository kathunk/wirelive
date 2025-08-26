<section class="py-16" id="schedule">

  <!-- Section Header -->
  <div class="text-left mb-16">
    <x-headline text="THE SCHEDULE" />
  </div>

  <div class="flex flex-col xl:flex-row justify-between gap-y-16">

    <!-- Day 01 - Schedule Section -->
    <div class="xl:w-[64.69%] md:w-4/5 w-full">
      <div class="flex flex-col w-full">
        <!-- Ticket Tab -->
        <div class="relative w-61.75 -mb-px">
            <x-icons.svg.ticket-tab class="w-61.75 h-12 text-fossil" />
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
            <div class="text-night-rider pt-4">
              <!-- Schedule items -->
              <x-schedule-item title="COFFEE & CHILL" time="9:00 AM - 9:45 AM" />
              <x-schedule-item title="OPENING REMARKS" time="9:00 AM - 9:45 AM" />
              <x-schedule-item title="WELCOME CALEB PORZIO" time="9:00 AM - 9:45 AM" />
              <x-schedule-item title="CROWD SOURCING COMPONENTS PATRICIO" time="9:00 AM - 9:45 AM" />
              <x-schedule-item title="DATATABLES AT THE SNAP OF A FINGER KEVIN MCKEE" time="9:00 AM - 9:45 AM" />
              <x-schedule-item title="SQUEEZING EVERY DROP OF PERFORMANCE RYAN CHRISOLOR" time="2:00 PM - 3:00 PM" />
              <x-schedule-item title="WHAT'S COMING TO FILAMENT DAN HARRIN" time="3:00 PM - 4:00 PM" />
              <x-schedule-item title="BUILD A FUSION SEARCH WITH ALGORITHMS JOHN CAROLES" time="4:00 PM - 5:00 PM" />
            </div>
        </div>

        <img src="/img/rip.png" alt="rip.png" class="w-full h-20 -mt-1" />
      </div>
    </div>

    <!-- Day 02 - Hackathon Section -->
    <div class="xl:w-[29.38%] md:w-3/5 xs:w-4/5 w-full">
      <div class="flex flex-col w-full h-full">
        <!-- Combined Tab and Card with Background -->
        <div class="relative h-[calc(100%-80px)]" style="
            background-image: url('/img/fun-colors.png');
            background-size: cover;
            background-position: center;
            clip-path: polygon(
                 0px 0px,
                 202px 0px,
                 247px 48px,
                 100% 48px,
                 100% 100%,
                 0px 100%
             );
            ">
          <!-- Ticket Tab -->
          <div class="relative w-61.75 -mb-px">
              <x-icons.svg.ticket-tab class="w-61.75 h-12" pink/>
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
          <div class="p-6 w-full">
            <h2 class="xl:text-[92px] lg:text-7xl text-5xl lg:leading-26 md:leading-20 leading-16 text-plum py-5">
              HACK-A-THON
            </h2>

            <p class="text-xl leading-relaxed">
              We rented a space out to chill, eat buffalo wings and play our collaboratively.
              We'll make a game or something and have prizes or whatever.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
