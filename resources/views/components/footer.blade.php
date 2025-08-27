@props([
    'fun' => false,
])

@php
    $textColor = $fun ? 'text-plum' : 'text-fossil';
    $linkColor = $fun ? 'text-cobalt hover:text-plum' : 'text-fossil hover:opacity-90';
    $lineColor = $fun ? 'text-plum' : 'text-fossil';
@endphp

<footer class="pt-16 pb-8" id="footer">
    <x-container>
        <!-- Main -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-12">

            <!-- FAQs -->
            <div>
                <x-headline text="FAQS" fun="{{ $fun }}" />

                <div class="mt-8">
                    <x-icons.svg.dashed-lines class="w-full h-4 {{ $lineColor }}" />

                    <details class="group">
                        <summary
                            class="flex items-center justify-between cursor-pointer hover:opacity-80 transition-opacity list-none p-4">
                            <span class="text-lg {{ $textColor }}">
                                WILL TALKS BE RECORDED?
                            </span>
                            <x-icons.svg.plus-sign
                                class="w-3.5 h-3.5 transition-transform group-open:rotate-45 {{ $textColor }}" />
                        </summary>
                        <div class="px-4 pb-4">
                            <p class="{{ $textColor }} leading-relaxed">
                                Yes! All talks will be recorded and made available to attendees after the event.
                                You'll receive access to the recordings within a week of the conference.
                            </p>
                        </div>
                    </details>

                    <x-icons.svg.dashed-lines class="w-full h-4 {{ $lineColor }}" />

                    <details class="group">
                        <summary
                            class="flex items-center justify-between cursor-pointer hover:opacity-80 transition-opacity list-none p-4">
                            <span class="text-lg {{ $textColor }}">
                                WHY BUFFALO?
                            </span>
                            <x-icons.svg.plus-sign
                                class="w-3.5 h-3.5 transition-transform group-open:rotate-45 {{ $textColor }}" />
                        </summary>
                        <div class="px-4 pb-4">
                            <p class="{{ $textColor }}">
                                Buffalo is a vibrant, affordable city with a growing tech scene.
                                It's easily accessible with an international airport, has great food and culture,
                                and provides the perfect backdrop for an intimate, focused conference experience.
                            </p>
                        </div>
                    </details>

                    <x-icons.svg.dashed-lines class="w-full h-4 {{ $lineColor }}" />
                </div>
            </div>

            <!-- Travel + Hotel Section -->
            <div>
                <x-headline text="TRAVEL + HOTEL" fun="{{ $fun }}" />

                <p class="text-xl {{ $textColor }} font-mono leading-relaxed my-8">
                    Buffalo has an international Airport to fly into. It's 15 minutes from downtown.
                    We will have a room block at the walkable Statler hotel. There are plenty of other hotels in the
                    area.
                </p>
                <a href="https://gist.github.com/calebporzio/7a7e75a2209d16f1694bc4a49faf8e45" target="_blank" class="flex">
                    <div class="px-6 py-2 bg-fossil text-2xl uppercase text-center sm:text-start">
                        View Conference Guide
                    </div>
                </a>
            </div>
        </div>

        <!-- Credits -->
        <div class="relative flex items-end justify-between gap-8 pt-8">

            <!-- Copyright -->
            <div class="text-sm {{ $textColor }}">
                All rights reserved © 2025
            </div>

            <!-- Collaboration Credit -->
            <div class="text-sm {{ $textColor }} font-mono peer" tabindex="0">
                A <span class="underline decoration-dotted decoration-gangsters-gold">Dope Boys</span> Collaboration
            </div>

            <!-- Speech Bubble -->
            <div @class([
                'absolute invisible opacity-0 bottom-6 right-0 duration-300 ease-in-out transition-all',
                'peer-active:opacity-100 peer-active:visible',
                'peer-focus:opacity-100 peer-focus:visible',
                'peer-hover:opacity-100 peer-hover:visible',
            ])>
                <div class="relative"
                    style="
                        background-image: url('/img/fun-colors.png');
                        background-size: cover;
                        background-position: center;
                        clip-path: polygon(
                            0% 0%,
                            100% 0%,
                            100% 36px,
                            58.5% 36px,
                            55.5% 44px,
                            52.5% 36px,
                            0% 36px
                        );
                ">
                    <div class="relative h-11">
                        <div class="px-4 py-2 flex items-center gap-8 flex-row justify-center">
                            <a href="https://x.com/wking__" target="_blank" class="flex items-center gap-3">
                                <x-icons.svg.dope.will class="mix-blend-exclusion" />
                                <span class="text-sm text-nowrap {{ $fun ? 'text-fossil' : 'text-night-rider' }}">Designed by
                                    Will King</span>
                            </a>
                            <a href="https://thunk.dev" target="_blank" class="flex items-center gap-3">
                                <x-icons.svg.dope.thunk class="mix-blend-exclusion" />
                                <span class="text-sm text-[#58003f] text-nowrap">Built by Thunk</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</footer>
