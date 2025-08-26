import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.getElementById("hamburger-btn");
    const closeMenuBtn = document.getElementById("close-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileFunMenu = document.getElementById("mobile-menu--fun");
    const funHamburgerBtn = document.getElementById("hamburger-btn--fun");
    const funCloseMenuBtn = document.getElementById("close-menu-btn--fun");

    function openMenu() {
        mobileMenu.setAttribute("aria-expanded", "true");
        mobileFunMenu.setAttribute("aria-expanded", "true");
    }

    function closeMenu() {
        console.log("closeMenu");
        mobileMenu.setAttribute("aria-expanded", "false");
        mobileFunMenu.setAttribute("aria-expanded", "false");
    }

    hamburgerBtn.addEventListener("click", openMenu);
    funHamburgerBtn.addEventListener("click", openMenu);
    closeMenuBtn.addEventListener("click", closeMenu);
    funCloseMenuBtn.addEventListener("click", closeMenu);

    // Close menu when navigation links are clicked
    const navLinks = mobileMenu.querySelectorAll("a");
    const funNavLinks = mobileFunMenu.querySelectorAll("a");
    [...navLinks, ...funNavLinks].forEach((link) => {
        link.addEventListener("click", closeMenu);
    });

    // Close menu on escape key
    document.addEventListener("keydown", function (e) {
        const isOpen = mobileMenu.getAttribute("aria-expanded") === "true";
        if (e.key === "Escape" && isOpen) {
            closeMenu();
        }
    });
});
