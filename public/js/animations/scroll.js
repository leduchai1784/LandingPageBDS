/**
 * GSAP Scroll & Entrance Animations
 */

function initScrollAnimations() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn('GSAP or ScrollTrigger not loaded yet.');
        return;
    }

    // 1. Hero Entrance Animation
    const heroTl = gsap.timeline({ defaults: { ease: 'power4.out' } });

    // Preloader clearance timeline
    heroTl.to('#preloader', {
        yPercent: -100,
        duration: 1.2,
        ease: 'power4.inOut',
        delay: 0.5,
        onComplete: () => {
            document.getElementById('preloader').style.display = 'none';
        }
    });

    // Reveal Subtitle
    heroTl.to('.reveal-text', {
        opacity: 1,
        y: 0,
        duration: 0.8,
    }, '-=0.4');

    // Reveal words in title sequentially
    heroTl.to('.reveal-word', {
        opacity: 1,
        y: 0,
        duration: 1,
        stagger: 0.15,
    }, '-=0.6');

    // Fade up description and action buttons
    heroTl.to('.fade-up', {
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.15
    }, '-=0.6');

    // Slide up the large hero graphics display
    heroTl.to('.fade-up-large', {
        opacity: 1,
        y: 0,
        duration: 1.2,
    }, '-=0.8');

    // 2. Sections Scroll Trigger Animations
    const scrollSections = document.querySelectorAll('.scroll-anim-trigger');

    scrollSections.forEach((section) => {
        // Animate elements with '.animate-on-scroll' inside each section
        const animElements = section.querySelectorAll('.animate-on-scroll');
        
        animElements.forEach((el) => {
            let fromVars = { opacity: 0, y: 50 };
            
            // Adjust direction depending on utility class
            if (el.classList.contains('slide-right')) {
                fromVars = { opacity: 0, x: -80, y: 0 };
            } else if (el.classList.contains('slide-left')) {
                fromVars = { opacity: 0, x: 80, y: 0 };
            }

            gsap.fromTo(el, 
                fromVars,
                {
                    opacity: 1,
                    x: 0,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 80%',
                        toggleActions: 'play none none none',
                        // markers: false // Set to true to debug
                    }
                }
            );
        });

        // Specific animation for Project Cards inside Showcase
        const projectCards = section.querySelectorAll('.reveal-card');
        if (projectCards.length > 0) {
            gsap.fromTo(projectCards, 
                { opacity: 0, y: 60 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1.2,
                    ease: 'power4.out',
                    stagger: 0.2,
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 75%'
                    }
                }
            );
        }

        // Animate Number Count-up in About section
        const numbers = section.querySelectorAll('.highlight-num');
        numbers.forEach((num) => {
            const rawVal = num.innerText;
            const parsedVal = parseInt(rawVal, 10);
            if (!isNaN(parsedVal)) {
                // Determine suffix like "%"
                const suffix = rawVal.replace(/[0-9]/g, '');
                const obj = { val: 0 };
                
                gsap.to(obj, {
                    val: parsedVal,
                    duration: 2,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 80%'
                    },
                    onUpdate: function () {
                        // Pad numbers smaller than 10 with a leading zero if the original had it
                        let valStr = Math.floor(obj.val).toString();
                        if (rawVal.startsWith('0') && valStr.length < rawVal.length - suffix.length) {
                            valStr = '0' + valStr;
                        }
                        num.innerText = valStr + suffix;
                    }
                });
            }
        });
    });
}

// Export function or assign to window for standard script access
window.initScrollAnimations = initScrollAnimations;
