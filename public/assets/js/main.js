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
    // Avoid forced reflow: batch scroll handling via rAF and passive listeners
    const selectBody = document.body;
    const selectHeader = document.querySelector("#header");
    let scheduled = false;

    const onScrollHandler = () => {
        if (scheduled) return;
        scheduled = true;
        window.requestAnimationFrame(() => {
            if (
                selectHeader &&
                (selectHeader.classList.contains("scroll-up-sticky") ||
                    selectHeader.classList.contains("sticky-top") ||
                    selectHeader.classList.contains("fixed-top"))
            ) {
                if (
                    window.scrollY > 100 &&
                    !selectBody.classList.contains("scrolled")
                ) {
                    selectBody.classList.add("scrolled");
                } else if (
                    window.scrollY <= 100 &&
                    selectBody.classList.contains("scrolled")
                ) {
                    selectBody.classList.remove("scrolled");
                }
            }
            scheduled = false;
        });
    };
    window.addEventListener("scroll", onScrollHandler);

    /**
     * Mobile nav toggle
     */
    const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");

    function mobileNavToogle() {
        document.querySelector("body").classList.toggle("mobile-nav-active");
        mobileNavToggleBtn.classList.toggle("bi-list");
        mobileNavToggleBtn.classList.toggle("bi-x");
    }
    mobileNavToggleBtn.addEventListener("click", mobileNavToogle);

    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll("#navmenu a").forEach((navmenu) => {
        navmenu.addEventListener("click", () => {
            if (document.querySelector(".mobile-nav-active")) {
                mobileNavToogle();
            }
        });
    });

    /**
     * Toggle mobile nav dropdowns
     */
    document
        .querySelectorAll(".navmenu .toggle-dropdown")
        .forEach((navmenu) => {
            navmenu.addEventListener("click", function (e) {
                e.preventDefault();
                this.parentNode.classList.toggle("active");
                this.parentNode.nextElementSibling.classList.toggle(
                    "dropdown-active"
                );
                e.stopImmediatePropagation();
            });
        });

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
