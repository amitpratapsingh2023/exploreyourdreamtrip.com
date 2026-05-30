/**
 * Explore Your Dream Trip - Interactive Functions
 */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileMenu();
    initFAQ();
    initBackToTop();
    initTestimonialSlider();
});

/**
 * Handle sticky header styling on scroll
 */
function initHeaderScroll() {
    const header = document.getElementById('main-header');
    if (!header) return;

    function adjustHeader() {
        if (window.scrollY > 50) {
            header.classList.add('glass-nav', 'shadow-lg', 'md:top-0');
            header.classList.remove('bg-transparent', 'md:top-9');
        } else {
            header.classList.remove('glass-nav', 'shadow-lg', 'md:top-0');
            header.classList.add('bg-transparent', 'md:top-9');
        }
    }

    // Run on initial load to handle direct hash loads (e.g. #fleet)
    adjustHeader();

    window.addEventListener('scroll', adjustHeader);
}

/**
 * Handle mobile menu toggle and drawer animation
 */
function initMobileMenu() {
    const menuBtn = document.getElementById('mobile-menu-btn');
    const closeBtn = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu-drawer');
    const overlay = document.getElementById('mobile-menu-overlay');

    if (!menuBtn || !mobileMenu) return;

    function openMenu() {
        mobileMenu.classList.remove('translate-x-full');
        if (overlay) overlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeMenu() {
        mobileMenu.classList.add('translate-x-full');
        if (overlay) overlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    menuBtn.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (overlay) overlay.addEventListener('click', closeMenu);

    // Close menu when clicking a link inside it
    const links = mobileMenu.querySelectorAll('a');
    links.forEach(link => {
        link.addEventListener('click', closeMenu);
    });
}

/**
 * FAQ Accordion toggle
 */
function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const button = item.querySelector('.faq-btn');
        const content = item.querySelector('.accordion-content');
        const icon = item.querySelector('.faq-icon');

        if (!button || !content) return;

        button.addEventListener('click', () => {
            const isOpen = content.classList.contains('active');
            
            // Close all other FAQs
            faqItems.forEach(otherItem => {
                const otherContent = otherItem.querySelector('.accordion-content');
                const otherIcon = otherItem.querySelector('.faq-icon');
                if (otherContent && otherContent !== content) {
                    otherContent.classList.remove('active');
                    otherContent.style.maxHeight = null;
                }
                if (otherIcon) {
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current FAQ
            if (isOpen) {
                content.classList.remove('active');
                content.style.maxHeight = null;
                if (icon) icon.style.transform = 'rotate(0deg)';
            } else {
                content.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}

/**
 * Back to Top Button logic
 */
function initBackToTop() {
    const btn = document.getElementById('back-to-top');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            btn.classList.remove('opacity-0', 'pointer-events-none');
            btn.classList.add('opacity-100', 'pointer-events-auto');
        } else {
            btn.classList.add('opacity-0', 'pointer-events-none');
            btn.classList.remove('opacity-100', 'pointer-events-auto');
        }
    });

    btn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Simple testimonial text slider / fade-in transitions
 */
function initTestimonialSlider() {
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.testimonial-dot');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    
    if (slides.length === 0) return;
    
    let currentIdx = 0;
    
    function showSlide(index) {
        // Wrap around
        if (index >= slides.length) currentIdx = 0;
        else if (index < 0) currentIdx = slides.length - 1;
        else currentIdx = index;
        
        slides.forEach((slide, idx) => {
            if (idx === currentIdx) {
                slide.classList.remove('hidden');
                slide.classList.add('block', 'opacity-100');
            } else {
                slide.classList.add('hidden');
                slide.classList.remove('block', 'opacity-100');
            }
        });
        
        // Update dots if any
        if (dots.length > 0) {
            dots.forEach((dot, idx) => {
                if (idx === currentIdx) {
                    dot.classList.add('bg-brand');
                    dot.classList.remove('bg-gray-400');
                } else {
                    dot.classList.remove('bg-brand');
                    dot.classList.add('bg-gray-400');
                }
            });
        }
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => showSlide(currentIdx - 1));
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => showSlide(currentIdx + 1));
    }
    
    if (dots.length > 0) {
        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => showSlide(idx));
        });
    }
    
    // Auto-slide every 5 seconds
    setInterval(() => {
        showSlide(currentIdx + 1);
    }, 6000);
    
    // Show first slide initially
    showSlide(0);
}
