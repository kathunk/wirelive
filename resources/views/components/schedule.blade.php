@props([
    'fun' => false
])

@php
    $textColor = $fun ? 'text-plum' : 'text-fossil';
    $bgColor = $fun ? 'bg-cobalt' : 'bg-fossil';
    $contentTextColor = $fun ? 'text-fossil' : 'text-night-rider';
    $imageFilter = $fun ? 'invert' : '';
@endphp

<section class="py-16" id="schedule">
    <x-container>
        <!-- Section Header -->
        <div class="text-left mb-16">
            <x-headline text="THE SCHEDULE" fun="{{ $fun }}" />
        </div>

        <div class="flex flex-col xl:flex-row justify-between gap-y-16">

            <!-- Day 01 - Schedule Section -->
            <div class="xl:w-[64.69%] md:w-4/5 w-full">
            <div class="flex flex-col w-full">
                <!-- Ticket Tab -->
                <div class="relative w-61.75 -mb-px">
                    <x-icons.svg.ticket-tab class="w-61.75 h-12 {{ $textColor }}" />
                    <div class="absolute left-6 top-3">
                        <span class="text-[44px] leading-none font-normal tracking-normal font-display uppercase {{ $fun ? 'text-fossil' : 'text-night-rider' }}">
                            Day 01
                        </span>
                    </div>
                    <div class="absolute bottom-0 right-0 w-3/7">
                        <x-icons.svg.ticket-tab-tear class="mb-px w-full" />
                    </div>
                </div>
                <!-- Card Content -->
                <div class="w-full {{ $bgColor }}">
                    <div class="{{ $contentTextColor }} pt-3">
                        <!-- TBA Content -->
                        {{-- <div class="lg:min-h-144 min-h-50">
                            <div class="py-26 sm:px-11 px-4">
                                <img src="/img/confidential.png" alt="confidential.png" class="{{ $imageFilter }}" />
                                <div class="mt-6 font-mono text-lg text-center {{ $fun ? 'text-fossil' : 'text-night-rider' }}">
                                    <span>
                                        We are still nailing down details.<br>
                                        Schedule will be released soon.
                                    </span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Schedule Content -->
                        <x-schedule-item
                            speaker="Caleb & Daniel"
                            title="Welcome"
                            time="9:30 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Filip Ganyicz"
                            title="TBA"
                            time="9:45 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Andy Newhouse"
                            title="Livewire in Production:"
                            subtitle="Avoiding Pitfalls, Applying Best Practices"
                            time="10:15 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Jason McCreary"
                            title="Testing Livewire"
                            time="10:40 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Break"
                            time="11:10 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="SPONSOR"
                            time="11:30 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Shane Rosenthal"
                            title="Build Mobile Apps With Livewire"
                            time="11:35 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Katie Wright"
                            title="Courage In the Small moments:"
                            subtitle="where imposter syndrome really shows up"
                            time="12:05 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Josh Cirre"
                            title="The Edge of Nonsense"
                            time="12:20 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Lunch"
                            time="12:45 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Matt Stauffer"
                            title="The Business Case for Livewire"
                            time="1:45 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Dan Harrin"
                            title="Building Interfaces with Only PHP:"
                            subtitle="Filament's Use of Livewire and Alpine"
                            time="2:00 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Mary Perry"
                            title="TBA"
                            time="2:30 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Break"
                            time="2:45 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="SPONSOR"
                            time="3:05 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Ryan Chandler"
                            title="Making the most of Alpine.js in Livewire"
                            time="3:10 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Kevin McKee"
                            title="TBA"
                            time="3:40 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Daniel Coulbourne"
                            title="Livewire.pdf, and Other Atrocities"
                            time="4:00 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Break"
                            time="4:15 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="SPONSOR"
                            time="4:35 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            speaker="Caleb Porzio"
                            title="Keynote"
                            time="4:40 PM"
                            fun="{{ $fun }}"
                        />
                    </div>
                </div>

                <img src="/img/rip.png" alt="rip.png" class="w-full h-20 -mt-1 {{ $imageFilter }}" />
            </div>
            </div>

            <!-- Day 02 - Hackathon Section -->
            <div class="xl:w-[29.38%] md:w-3/5 xs:w-4/5 w-full">
            <div class="flex flex-col w-full h-full">
                <!-- Combined Tab and Card with Background -->
                <div class="relative" style="
                    background-image: url('/img/fun-colors.png');
                    background-size: cover;
                    background-position: center;
                    clip-path: polygon(
                        0px 0px,
                        202px 0px,
                        247px 47px,
                        100% 47px,
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
                <div class="p-6 w-full flex flex-col justify-between gap-y-4">
                    <h2 class="grow flex items-center">
                        <span class="xl:text-[92px] lg:text-7xl text-5xl lg:leading-26 md:leading-20 leading-16 text-plum">
                            HACK &amp;<br />HANG
                        </span>
                    </h2>

                    <p class="text-xl font-mono leading-relaxed {{ $fun ? 'text-fossil' : 'text-night-rider' }}">
                        This is an unstructured day of laptops, coffee, and fun.
                    </p>

                    <p class="text-xl font-mono leading-relaxed {{ $fun ? 'text-fossil' : 'text-night-rider' }}">
                        Choose from a selection of beguiling Livewire prompts and hack the day away with other folks from the community.
                    </p>

                    <p class="text-xl font-mono leading-relaxed {{ $fun ? 'text-fossil' : 'text-night-rider' }}">
                        Throughout the day teams will take the stage to show off their stuff.
                    </p>

                    <p class="text-xl font-mono leading-relaxed {{ $fun ? 'text-fossil' : 'text-night-rider' }}">
                        Expect to laugh and cry.
                    </p>
                </div>
                </div>
            </div>
            </div>

        </div>
    </x-container>
</section>
