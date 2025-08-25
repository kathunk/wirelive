<header class="flex items-center justify-between py-8 w-full">
  <x-icons.svg.wire-live class="w-32 h-8" />
  <nav>
    <!-- Desktop Navigation -->
    <div class="hidden lg:flex items-center gap-8">
        <x-nav-links />
    </div>

    <!-- Mobile Hamburger Menu -->
    <div class="lg:hidden">
        <!-- Hamburger Button -->
        <button
            id="hamburger-btn"
            class="text-white p-2 hover:text-fossil transition-colors"
            aria-label="Toggle menu"
        >
            <x-icons.svg.hamburger class="w-6 h-6" />
        </button>

        <!-- Mobile Menu Overlay -->
        <div
            id="mobile-menu"
            class="fixed inset-0 bg-[#2d2d2d] z-50 hidden"
        >
            <!-- Header with Logo and Close Button -->
            <div class="flex items-center justify-between p-6">
                <x-icons.svg.wire-live class="w-32 h-8" />
                <button
                    id="close-menu-btn"
                    class="text-white p-2 hover:text-fossil transition-colors"
                    aria-label="Close menu"
                >
                    <x-icons.svg.close class="w-6 h-6" />
                </button>
            </div>

            <!-- Mobile Navigation Links -->
            <div class="flex flex-col items-center gap-6 p-6">
                <x-nav-links />
            </div>
        </div>
    </div>
  </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    function openMenu() {
        mobileMenu.classList.remove('hidden');
    }

    function closeMenu() {
        mobileMenu.classList.add('hidden');
    }

    hamburgerBtn.addEventListener('click', openMenu);
    closeMenuBtn.addEventListener('click', closeMenu);

    // Close menu when navigation links are clicked
    const navLinks = mobileMenu.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
            closeMenu();
        }
    });
});
</script>
