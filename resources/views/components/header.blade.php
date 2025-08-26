<header class="flex items-center justify-between py-4 md:py-8 w-full z-50 relative">
    <x-icons.svg.wire-live class="w-24 md:w-32 h-auto relative z-10" />
    <nav>
        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center gap-8">
            <x-nav-links />
        </div>

        <!-- Mobile Hamburger Menu -->
        <div class="lg:hidden isolate group" id="mobile-menu" aria-expanded="false">
            <!-- Hamburger Button -->
            <button id="hamburger-btn"
                class="text-white p-2 hover:text-fossil transition-colors z-10 group-aria-expanded:hidden z-10 relative"
                aria-label="Toggle menu">
                <x-icons.svg.hamburger class="w-6 h-6" />
            </button>
            <button id="close-menu-btn"
                class="text-white p-2 hover:text-fossil transition-colors group-aria-expanded:block hidden z-10 relative"
                aria-label="Close menu">
                <x-icons.svg.close class="w-6 h-6" />
            </button>

            <!-- Mobile Menu Overlay -->
            <div class="fixed inset-0 bg-night-rider hidden group-aria-expanded:block pt-20">
                <!-- Mobile Navigation Links -->
                <div class="flex flex-col items-center gap-6 p-6">
                    <x-nav-links />
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const closeMenuBtn = document.getElementById('close-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        function openMenu() {
            mobileMenu.setAttribute('aria-expanded', 'true');
        }

        function closeMenu() {
            mobileMenu.setAttribute('aria-expanded', 'false');
        }

        hamburgerBtn.addEventListener('click', openMenu);
        closeMenuBtn.addEventListener('click', closeMenu);

        // Close menu when navigation links are clicked
        const navLinks = mobileMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close menu on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                closeMenu();
            }
        });
    });
</script>
