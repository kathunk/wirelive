import "./bootstrap";

import.meta.glob(["../images/**", "../fonts/**"]);

document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.getElementById("hamburger-btn") || document.getElementById("hamburger-btn--fun");
    const closeMenuBtn = document.getElementById("close-menu-btn") || document.getElementById("close-menu-btn--fun");
    const mobileMenu = document.getElementById("mobile-menu") || document.getElementById("mobile-menu--fun");

    function openMenu() {
        if (mobileMenu) mobileMenu.setAttribute("aria-expanded", "true");
    }

    function closeMenu() {
        console.log("closeMenu");
        if (mobileMenu) mobileMenu.setAttribute("aria-expanded", "false");
    }

    if (hamburgerBtn) hamburgerBtn.addEventListener("click", openMenu);
    if (closeMenuBtn) closeMenuBtn.addEventListener("click", closeMenu);

    if (mobileMenu) {
        const navLinks = mobileMenu.querySelectorAll("a");
        navLinks.forEach((link) => {
            link.addEventListener("click", closeMenu);
        });
    }

    document.addEventListener("keydown", function (e) {
        const isOpen = mobileMenu && mobileMenu.getAttribute("aria-expanded") === "true";
        if (e.key === "Escape" && isOpen) {
            closeMenu();
        }
    });
});
