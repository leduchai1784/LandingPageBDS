/**
 * Aura Elite - Main JS Script Orchestrator
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Remove .no-js class from body (if present)
    document.body.classList.remove('no-js');

    // 2. Initialize Lenis Smooth Scroll
    if (typeof Lenis !== 'undefined') {
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Custom easing for premium momentum
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });

        // Frame updates loop
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Sync with GSAP ScrollTrigger if available
        if (typeof ScrollTrigger !== 'undefined' && typeof gsap !== 'undefined') {
            lenis.on('scroll', ScrollTrigger.update);
            
            gsap.ticker.add((time) => {
                lenis.raf(time * 1000);
            });
            
            gsap.ticker.lagSmoothing(0);
        }
    } else {
        console.warn('Lenis Smooth Scroll was not loaded via CDN. Falling back to native scrolling.');
    }

    // 3. Initialize Animations & Interactions
    if (typeof window.initScrollAnimations === 'function') {
        window.initScrollAnimations();
    }
    
    if (typeof window.initHoverInteractions === 'function') {
        window.initHoverInteractions();
    }
});
