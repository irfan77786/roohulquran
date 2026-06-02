/**
 * Template Name: Mentor
 * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
 * Updated: Aug 07 2024 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

(function () {
    "use strict";

    /**
     * Apply .scrolled class to the body as the page is scrolled down
     */
    // Optimized scroll handler to prevent forced reflows
    let selectBody,
        selectHeader,
        headerClasses,
        isScrolled = false;
    let scheduled = false;
    let lastScrollY = 0;

    // Cache DOM elements and classes on load to avoid repeated queries
    function initScrollHandler() {
        selectBody = document.body;
        selectHeader = document.querySelector("#header");

        if (!selectHeader) return;

        // Cache header classes to avoid repeated classList.contains calls
        headerClasses = {
            scrollUpSticky: selectHeader.classList.contains("scroll-up-sticky"),
            stickyTop: selectHeader.classList.contains("sticky-top"),
            fixedTop: selectHeader.classList.contains("fixed-top"),
        };

        // Only proceed if header has one of the sticky classes
        if (
            !headerClasses.scrollUpSticky &&
            !headerClasses.stickyTop &&
            !headerClasses.fixedTop
        ) {
            return;
        }

        // Add passive scroll listener
        window.addEventListener("scroll", onScrollHandler, { passive: true });
    }

    const onScrollHandler = () => {
        if (scheduled) return;
        scheduled = true;

        requestAnimationFrame(() => {
            const currentScrollY = window.scrollY;

            // Only update if scroll position changed significantly
            if (Math.abs(currentScrollY - lastScrollY) < 5) {
                scheduled = false;
                return;
            }

            lastScrollY = currentScrollY;

            if (currentScrollY > 100) {
                if (!isScrolled) {
                    selectBody.classList.add("scrolled");
                    isScrolled = true;
                }
            } else {
                if (isScrolled) {
                    selectBody.classList.remove("scrolled");
                    isScrolled = false;
                }
            }

            scheduled = false;
        });
    };

    // Initialize on DOM ready
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initScrollHandler);
    } else {
        initScrollHandler();
    }

    /**
     * Mobile nav toggle - optimized to prevent forced reflows
     */
    let mobileNavToggleBtn, bodyElement;

    function initMobileNav() {
        mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");
        bodyElement = document.body;

        if (mobileNavToggleBtn) {
            mobileNavToggleBtn.addEventListener("click", mobileNavToogle);
        }
    }

    function mobileNavToogle() {
        bodyElement.classList.toggle("mobile-nav-active");
        mobileNavToggleBtn.classList.toggle("bi-list");
        mobileNavToggleBtn.classList.toggle("bi-x");
    }

    // Initialize mobile nav on DOM ready
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initMobileNav);
    } else {
        initMobileNav();
    }

    /**
     * Hide mobile nav on same-page/hash links - optimized
     */
    function initNavMenuLinks() {
        const navMenuLinks = document.querySelectorAll("#navmenu a");
        navMenuLinks.forEach((navmenu) => {
            navmenu.addEventListener("click", () => {
                if (
                    bodyElement &&
                    bodyElement.classList.contains("mobile-nav-active")
                ) {
                    mobileNavToogle();
                }
            });
        });
    }

    // Initialize nav menu links on DOM ready
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initNavMenuLinks);
    } else {
        initNavMenuLinks();
    }

    /**
     * Toggle mobile nav dropdowns - optimized
     */
    function initNavDropdowns() {
        const dropdownToggles = document.querySelectorAll(
            ".navmenu .toggle-dropdown"
        );
        dropdownToggles.forEach((navmenu) => {
            navmenu.addEventListener("click", function (e) {
                e.preventDefault();
                this.parentNode.classList.toggle("active");
                this.parentNode.nextElementSibling.classList.toggle(
                    "dropdown-active"
                );
                e.stopImmediatePropagation();
            });
        });
    }

    // Initialize nav dropdowns on DOM ready
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initNavDropdowns);
    } else {
        initNavDropdowns();
    }

    /**
     * Preloader
     */
    const preloader = document.querySelector("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }

    /**
     * Scroll top button
     */

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
        if (window.AOS && typeof AOS.init === "function") {
            AOS.init({
                duration: 600,
                easing: "ease-in-out",
                once: true,
                mirror: false,
            });
        }
    }
    window.addEventListener("load", aosInit);

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
        selector: ".glightbox",
    });

    /**
     * Initiate Pure Counter
     */
    new PureCounter();

    /**
     * Init swiper sliders
     */
    function initSwiper() {
        if (typeof Swiper === "undefined") return;

        document
            .querySelectorAll(".init-swiper")
            .forEach(function (swiperElement) {
                let config = JSON.parse(
                    swiperElement
                        .querySelector(".swiper-config")
                        .innerHTML.trim()
                );

                if (swiperElement.classList.contains("swiper-tab")) {
                    initSwiperWithCustomPagination(swiperElement, config);
                } else {
                    new Swiper(swiperElement, config);
                }
            });
    }

    window.addEventListener("load", initSwiper);
})();
