/**
 * Interactive Hover & Micro-interactions (3D Card Tilt, Header actions)
 */

function initHoverInteractions() {
    // 1. Mobile Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            // Animate hamburger lines
            const bars = menuToggle.querySelectorAll('.hamburger-bar');
            if (mobileMenu.classList.contains('open')) {
                gsap.to(bars[0], { y: 8, rotation: 45, duration: 0.3 });
                gsap.to(bars[1], { opacity: 0, duration: 0.2 });
                gsap.to(bars[2], { y: -8, rotation: -45, duration: 0.3 });
            } else {
                gsap.to(bars[0], { y: 0, rotation: 0, duration: 0.3 });
                gsap.to(bars[1], { opacity: 1, duration: 0.2 });
                gsap.to(bars[2], { y: 0, rotation: 0, duration: 0.3 });
            }
        });

        // Close mobile menu on clicking links
        const mobileLinks = mobileMenu.querySelectorAll('.mobile-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                const bars = menuToggle.querySelectorAll('.hamburger-bar');
                gsap.to(bars[0], { y: 0, rotation: 0, duration: 0.3 });
                gsap.to(bars[1], { opacity: 1, duration: 0.2 });
                gsap.to(bars[2], { y: 0, rotation: 0, duration: 0.3 });
            });
        });
    }

    // 2. Active Nav Link on Scroll
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.desktop-nav .nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= (sectionTop - 120)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // 3. Premium 3D Tilt Effect on Cards (Glass Card & Project Cards)
    const tiltCards = document.querySelectorAll('.aura-spec-card, .project-card');

    tiltCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            
            // Mouse coordinates relative to card
            const x = e.clientX - rect.left; 
            const y = e.clientY - rect.top;
            
            // Normalize values (-0.5 to 0.5)
            const xc = (x / rect.width) - 0.5;
            const yc = (y / rect.height) - 0.5;
            
            // Calculate tilt angle (max 12 degrees)
            const rotateX = yc * -12;
            const rotateY = xc * 12;

            // Apply 3D rotation and translate effects via GSAP
            gsap.to(card, {
                rotationX: rotateX,
                rotationY: rotateY,
                transformPerspective: 800,
                ease: 'power1.out',
                duration: 0.3,
                overwrite: 'auto'
            });

            // If card has a metallic reflection/glow block, move it relative to cursor
            const cardGlow = card.querySelector('.card-glow');
            if (cardGlow) {
                gsap.to(cardGlow, {
                    x: x - 75, // center glow on cursor (glow radius is 150px)
                    y: y - 75,
                    duration: 0.3,
                    ease: 'power1.out',
                    overwrite: 'auto'
                });
            }
        });

        card.addEventListener('mouseleave', () => {
            // Reset to flat
            gsap.to(card, {
                rotationX: 0,
                rotationY: 0,
                ease: 'power2.out',
                duration: 0.6,
                overwrite: 'auto'
            });

            const cardGlow = card.querySelector('.card-glow');
            if (cardGlow) {
                gsap.to(cardGlow, {
                    x: 'unset',
                    y: 'unset',
                    duration: 0.6,
                    ease: 'power2.out',
                    overwrite: 'auto'
                });
            }
        });
    });
}

// Export function or assign to window for standard script access
window.initHoverInteractions = initHoverInteractions;
