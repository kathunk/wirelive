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
                                We hope so, but can't make any promises.
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
                                Caleb here; I've always wanted to do a conference in Buffalo and hang out with all my friends in my hometown. Come hang.
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
                    You can book a room at the hotel venue (Aloft Buffalo Downtown Hotel). There are plenty of other hotels in the
                    area.
                </p>
                <div class="flex">
                    <x-arrow-button href="https://docs.google.com/document/d/1LeWKm-TJ6EVXSLzVY1xTPGEq-OOPK_BTEM-WBgV38lE/edit?usp=sharing" target="_blank" class="px-6 py-2 bg-fossil text-2xl uppercase text-center sm:text-start">
                        View Travel Guide
                    </x-arrow-button>
                </div>
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
