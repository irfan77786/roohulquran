/**
 * Lightweight Animation System using Intersection Observer
 * Performance optimized - no heavy libraries
 */

(function() {
    'use strict';

    // Check if user prefers reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    
    if (prefersReducedMotion) {
        return; // Exit early if user prefers reduced motion
    }

    // Navbar Animation on Load
    function initNavbarAnimation() {
        const header = document.getElementById('header');
        if (header) {
            // Add animate-in class on load
            header.classList.add('animate-in');
            
            // Animate navbar menu items on load (not scroll)
            const navLinks = header.querySelectorAll('.navmenu a.fade-in');
            navLinks.forEach((link, index) => {
                setTimeout(() => {
                    link.classList.add('animated');
                }, 100 + (index * 50)); // Stagger animation
            });
            
            // Handle scroll behavior
            let lastScroll = 0;
            const scrollThreshold = 100;
            
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
                
                if (currentScroll > scrollThreshold) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                
                lastScroll = currentScroll;
            }, { passive: true });
        }
    }

    // Intersection Observer for scroll animations
    function initScrollAnimations() {
        // Create observer with performance optimizations
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -50px 0px', // Trigger when element is 50px from viewport bottom
            threshold: 0.1 // Trigger when 10% of element is visible
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    // Unobserve after animation to improve performance
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        const animatedElements = document.querySelectorAll(
            '.animate-on-scroll, .fade-in, .slide-up, .slide-left, .slide-right, .scale-in, .zoom-in'
        );

        animatedElements.forEach(el => {
            observer.observe(el);
        });

        // Also observe elements with data-animate attribute
        const dataAnimateElements = document.querySelectorAll('[data-animate]');
        dataAnimateElements.forEach(el => {
            observer.observe(el);
        });
    }

    // Stagger animation for child elements
    function initStaggerAnimations() {
        const staggerContainers = document.querySelectorAll('[data-stagger]');
        
        staggerContainers.forEach(container => {
            const children = container.children;
            const delay = parseFloat(container.dataset.stagger) || 100;
            
            Array.from(children).forEach((child, index) => {
                child.style.transitionDelay = `${index * delay}ms`;
                child.classList.add('animate-on-scroll');
            });
        });
    }

    // Animate counters when they come into view
    function initCounterAnimations() {
        const counters = document.querySelectorAll('.purecounter');
        
        if (counters.length === 0) return;
        
        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // PureCounter will handle the animation
                    entry.target.classList.add('animated');
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => {
            counterObserver.observe(counter);
        });
    }

    // Parallax effect for hero section (lightweight)
    function initParallaxEffect() {
        const hero = document.getElementById('hero');
        if (!hero) return;

        let ticking = false;
        
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    const scrolled = window.pageYOffset;
                    const parallaxSpeed = 0.5;
                    
                    if (hero) {
                        hero.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
                    }
                    
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }

    // Initialize all animations when DOM is ready
    function init() {
        initNavbarAnimation();
        initScrollAnimations();
        initStaggerAnimations();
        initCounterAnimations();
        
        // Only init parallax on desktop (better performance)
        if (window.innerWidth > 768) {
            initParallaxEffect();
        }
    }

    // Run when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Re-initialize on dynamic content load
    window.addEventListener('load', function() {
        initScrollAnimations();
        initStaggerAnimations();
    });

})();

