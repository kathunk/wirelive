@props([
    'fun' => false
])

@php
    $logoColor = $fun ? 'text-plum' : 'text-fossil';
    $openClasses = $fun ? 'text-cobalt' : 'text-fossil';
    $closeClasses = $fun ? 'text-plum' : 'text-fossil';
    $mobileMenuClasses = $fun ? 'bg-fossil' : 'bg-night-rider';

    $hamburgerId = 'hamburger-btn' . ($fun ? '--fun' : '');
    $closeMenuId = 'close-menu-btn' . ($fun ? '--fun' : '');
    $mobileMenuId = 'mobile-menu' . ($fun ? '--fun' : '');
@endphp

<header class="absolute top-0 inset-x-0 w-full z-50">
    <x-container class="flex items-center justify-between py-4 md:py-8">
    <div class="flex flex-col">
        <x-icons.svg.wire-live
            class="w-24 md:w-32 h-auto relative z-10 {{ $logoColor }}" />
            
        <div class="relative w-full font-mono xs:mb-0 text-fossil">
            <span class="text-base">hosted by</span>
            <a href="https://livewire.laravel.com" target="_blank">
                Livewire
            </a>
            <span>+<span>
            <a href="https://thunk.dev" target="_blank" class="inline-block relative text-base transition-colors">
                 Thunk
                 <img class="absolute bottom-0 left-0 w-full h-1" src="/img/fun-colors.png" alt="" />
            </a>
        </div>
    </div>
    <nav>
        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center gap-8">
            <x-nav-links fun="{{ $fun }}" />
        </div>

        <!-- Mobile Hamburger Menu -->
        <div class="lg:hidden isolate group" id="{{ $mobileMenuId }}" aria-expanded="false">
            <!-- Hamburger Button -->
            <button id="{{ $hamburgerId }}"
                class="{{ $openClasses }} p-2 hover:opacity-70 transition-opacity duration-200 group-aria-expanded:hidden z-10 relative"
                aria-label="Toggle menu">
                <x-icons.svg.hamburger class="w-6 h-6" />
            </button>
            <button id="{{ $closeMenuId }}"
                class="{{ $closeClasses }} p-2 hover:opacity-70 transition-opacity duration-200 group-aria-expanded:block hidden z-10 relative"
                aria-label="Close menu">
                <x-icons.svg.close class="w-6 h-6" />
            </button>

            <!-- Mobile Menu Overlay -->
            <div class="fixed inset-0 {{ $mobileMenuClasses }} hidden group-aria-expanded:block pt-20">
                <!-- Mobile Navigation Links -->
                <div class="flex flex-col items-center gap-6 p-6">
                    <x-nav-links fun="{{ $fun }}" />
                </div>
            </div>
            </div>
        </nav>
    </x-container>
</header>
