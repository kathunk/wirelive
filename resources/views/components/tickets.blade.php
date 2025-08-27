@props([
    'fun' => false
])

@php
    $textColor = $fun ? 'text-plum' : 'text-fossil';
    $buttonTextColor = $fun ? 'text-fossil' : 'text-plum';
    $benefitTextColor = $fun ? 'text-fossil' : 'text-fossil';
    $bgOpacity = $fun ? 'bg-cobalt/10' : 'bg-fossil/10';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<section class="py-16 mt-16" id="tickets">
    <x-container>
        <!-- Section Header -->
        <div class="mb-2">
            <h2 class="text-2xl font-mono {{ $textColor }} uppercase">
                GET A TICKET...NOW
            </h2>
        </div>

        <!-- Ticket Options -->
        <div>
    <!-- In Person Ticket -->
    <div class="relative {{ $bgOpacity }} p-15">
      <div class="relative">
        <!-- Title and Benefits Row -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-x-10 gap-y-10">
            <!-- IN PERSON Title -->
            <x-headline text="IN PERSON" compact fun="{{ $fun }}" />

          <!-- Benefits Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-8 gap-x-3">
            <x-ticket-benefit fun="{{ $fun }}">
                ENTRY TO ALL THE EVENTS
            </x-ticket-benefit>
            <x-ticket-benefit fun="{{ $fun }}">
                THE SWAGGEST OF BAGS
            </x-ticket-benefit>
            <x-ticket-benefit fun="{{ $fun }}">
                FOOD AND STUFF
            </x-ticket-benefit>
            <x-ticket-benefit fun="{{ $fun }}">
                AFTER PARTY... DON'T MISS IT
            </x-ticket-benefit>
          </div>
        </div>
      </div>
    </div>

    <!-- Buy Tickets Now -->
    <div class="relative">
      <a href="#" class="block relative overflow-hidden h-24 group">
        <img src="/img/fun-colors.png" alt="" class="w-full h-full object-cover {{ $imageFilter }}" />

        <!-- Left Side Stripes -->
        <div class="absolute left-0 top-0 w-16 md:w-[22%] h-full opacity-40">
          <div class="w-full h-full bg-position-[0_0] group-hover:bg-position-[0_-30px] transition-all duration-300" style="background-image: url('/img/group-1-2.png'); background-size: cover; background-repeat: repeat; filter: brightness(0) saturate(100%) invert(0);"></div>
        </div>

        <!-- Right Side Stripes -->
        <div class="absolute right-0 top-0 w-16 md:w-[22%] h-full opacity-40 ">
          <div class="w-full h-full bg-position-[0_0] group-hover:bg-position-[0_-30px] transition-all duration-300" style="background-image: url('/img/group-1-2.png'); background-size: cover; background-repeat: repeat; filter: brightness(0) saturate(100%) invert(0);"></div>
        </div>

        <div class="absolute inset-0 flex items-center justify-center">
          <a href="https://luma.com/bbpxn8k2" target="_blank" class="bg-transparent py-4 px-8 hover:opacity-90 transition-opacity">
            <div class="flex items-center justify-center gap-4">
              <span class="text-2xl font-bold {{ $buttonTextColor }}">BUY TICKETS NOW</span>
              <div class="bg-plum px-3 py-1">
                <span class="text-2xl font-bold" style="background-image: url('/img/fun-colors.png'); background-size: 2500% 2500%; background-position: center; background-clip: text; -webkit-background-clip: text; color: transparent;">
                    $149
                </span>
              </div>
            </div>
          </a>
        </div>
      </a>
    </div>

    <!-- Online Ticket -->
    {{--
    <div class="flex h-23 overflow-hidden mt-4 bg-fossil">
      <!-- Left Section (3/4 width) -->
      <div class="relative w-3/4">

        <!-- ONLINE Text - Absolutely positioned to take full height -->
        <div class="absolute -left-1 top-2.5 h-full flex items-center">
          <h3 class="text-[7.65rem] text-night-rider font-display uppercase tracking-wide translate-y-[0.10rem]">
            ONLINE
          </h3>
        </div>

        <!-- Main Text -->
          <p class="text-2xl text-night-rider h-full text-right flex items-center justify-end pl-40 pr-12">
            GET ACCESS TO THE LIVE STREAM AND THE COMMUNITY DISCORD
          </p>
      </div>

      <!-- Right Section (1/4 width) -->
      <div class="relative w-1/4 border-l-2 border-dashed border-night-rider flex items-center justify-center p-8">
        <!-- Button Text -->
        <div class="text-2xl text-night-rider">
          BUY ONLINE TICKET
        </div>
      </div>
    </div>
    --}}
        </div>
    </x-container>
</section>
