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
                    <div class="{{ $contentTextColor }} pt-4">
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
                            title="Caleb + Daniel - Intro"
                            time="9:30 AM - 9:45 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Ryan Chandler"
                            time="9:45 AM - 10:10 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Andy Newhouse"
                            time="10:10 AM - 10:35 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Matt Stauffer"
                            time="10:35 AM - 10:45 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Break"
                            time="10:45 AM - 11:15 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="SPONSOR"
                            time="11:15 AM - 11:20 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Jason McCreary"
                            time="11:20 AM - 11:45 AM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Josh Cirre"
                            time="11:45 AM - 12:10 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Lunch"
                            time="12:10 PM - 1:10 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Dan Harrin"
                            time="1:10 PM - 1:35 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Larabelle"
                            time="1:35 PM - 2:00 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Break"
                            time="2:00 PM - 2:30 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="SPONSOR"
                            time="2:30 PM - 2:35 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Shane Rosenthal"
                            time="2:35 PM - 3:00 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Daniel Coulbourne"
                            time="3:00 PM - 3:10 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Break"
                            time="3:10 PM - 3:40 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="SPONSOR"
                            time="3:40 PM - 3:45 PM"
                            fun="{{ $fun }}"
                        />
                        <x-schedule-item
                            title="Caleb"
                            time="3:45 PM - 4:45 PM"
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
                <div class="relative h-[calc(45%-76px)]" style="
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
                <div class="p-6 w-full">
                    <h2 class="xl:text-[92px] lg:text-7xl text-5xl lg:leading-26 md:leading-20 leading-16 text-plum py-5">
                        HACK &amp;<br />HANG
                    </h2>

                    <p class="text-xl leading-relaxed {{ $fun ? 'text-fossil' : 'text-night-rider' }}">
                    Bring your Laptop and a project/idea and we’ll all chill and build cool stuff and hang out together with food and coffee. It’ll be sick.
                    </p>
                </div>
                </div>
            </div>
            </div>

        </div>
    </x-container>
</section>
