/**
 * Explore Your Dream Trip - Interactive Functions
 */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileMenu();
    initFAQ();
    initBackToTop();
    initGalleryLightbox();
    initPremiumTabs();
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
                    otherItem.classList.remove('active');
                }
                if (otherIcon) {
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current FAQ
            if (isOpen) {
                content.classList.remove('active');
                content.style.maxHeight = null;
                item.classList.remove('active');
                if (icon) icon.style.transform = 'rotate(0deg)';
            } else {
                content.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
                item.classList.add('active');
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
 * Gallery Lightbox Modal logic
 */
function initGalleryLightbox() {
    const lightbox = document.getElementById('gallery-lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const lightboxCounter = document.getElementById('lightbox-counter');
    const closeBtn = document.getElementById('lightbox-close');
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');
    const items = document.querySelectorAll('[data-gallery-item]');

    if (!lightbox || items.length === 0) return;

    let currentIdx = 0;

    function openLightbox(index) {
        currentIdx = parseInt(index);
        updateLightboxContent();
        
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        
        // Disable scroll
        document.body.classList.add('overflow-hidden');
        
        // Trigger reflow for transition
        setTimeout(() => {
            lightbox.classList.remove('opacity-0');
            lightbox.classList.add('opacity-100');
        }, 10);
    }

    function closeLightbox() {
        lightbox.classList.remove('opacity-100');
        lightbox.classList.add('opacity-0');
        
        // Enable scroll
        document.body.classList.remove('overflow-hidden');
        
        // Hide after transition finishes
        setTimeout(() => {
            lightbox.classList.remove('flex');
            lightbox.classList.add('hidden');
        }, 300);
    }

    function updateLightboxContent() {
        const item = items[currentIdx];
        if (!item) return;

        const src = item.getAttribute('data-src');
        const title = item.getAttribute('data-title');

        // Apply smooth fade/scale transition to the image
        lightboxImg.classList.add('scale-95', 'opacity-0');
        
        setTimeout(() => {
            lightboxImg.src = src;
            lightboxImg.alt = title;
            lightboxCaption.textContent = title;
            lightboxCounter.textContent = `${currentIdx + 1} / ${items.length}`;
            
            lightboxImg.classList.remove('scale-95', 'opacity-0');
        }, 150);
    }

    function showNext() {
        currentIdx = (currentIdx + 1) % items.length;
        updateLightboxContent();
    }

    function showPrev() {
        currentIdx = (currentIdx - 1 + items.length) % items.length;
        updateLightboxContent();
    }

    // Attach click events to gallery items
    items.forEach(item => {
        item.addEventListener('click', (e) => {
            const index = item.getAttribute('data-index');
            openLightbox(index);
        });
    });

    // Close button
    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);

    // Prev/Next buttons
    if (prevBtn) prevBtn.addEventListener('click', showPrev);
    if (nextBtn) nextBtn.addEventListener('click', showNext);

    // Close on clicking outside the image container (overlay)
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (lightbox.classList.contains('hidden')) return;

        if (e.key === 'ArrowRight') {
            showNext();
        } else if (e.key === 'ArrowLeft') {
            showPrev();
        } else if (e.key === 'Escape') {
            closeLightbox();
        }
    });
}


/**
 * Premium Tabs — Tour Detail Page
 * Handles tab switching, animated indicator, keyboard nav, and URL hash deep-linking
 */
function initPremiumTabs() {
    const nav = document.getElementById('tourTabsNav');
    const panelsContainer = document.getElementById('tourTabPanels');
    const indicator = document.getElementById('tabIndicator');

    if (!nav || !panelsContainer) return;

    const tabs = nav.querySelectorAll('.premium-tab');
    const panels = panelsContainer.querySelectorAll('.premium-tab-panel');

    if (tabs.length === 0) return;

    // ── Position the sliding indicator ──
    function moveIndicator(tab) {
        if (!indicator) return;
        const navRect = nav.getBoundingClientRect();
        const tabRect = tab.getBoundingClientRect();
        indicator.style.left = (tabRect.left - navRect.left + nav.scrollLeft) + 'px';
        indicator.style.width = tabRect.width + 'px';
        indicator.style.display = 'block';
    }

    // ── Switch to a specific tab ──
    function switchTab(targetTab) {
        const tabId = targetTab.getAttribute('data-tab');

        // Deactivate all
        tabs.forEach(t => {
            t.classList.remove('active');
            t.setAttribute('aria-selected', 'false');
        });
        panels.forEach(p => {
            p.classList.remove('active');
        });

        // Activate target
        targetTab.classList.add('active');
        targetTab.setAttribute('aria-selected', 'true');
        const targetPanel = document.getElementById('panel-' + tabId);
        if (targetPanel) {
            targetPanel.classList.add('active');
        }

        // Slide indicator
        moveIndicator(targetTab);

        // Auto-scroll the tab into view on mobile (horizontal overflow)
        targetTab.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });

        // Update URL hash without scrolling
        history.replaceState(null, '', '#tab-' + tabId);
    }

    // ── Click handlers ──
    tabs.forEach(tab => {
        tab.addEventListener('click', () => switchTab(tab));
    });

    // ── Keyboard navigation (Arrow Left / Right) ──
    nav.addEventListener('keydown', (e) => {
        const tabsArr = Array.from(tabs);
        const currentIdx = tabsArr.findIndex(t => t.classList.contains('active'));

        if (e.key === 'ArrowRight') {
            e.preventDefault();
            const nextIdx = (currentIdx + 1) % tabsArr.length;
            tabsArr[nextIdx].focus();
            switchTab(tabsArr[nextIdx]);
        } else if (e.key === 'ArrowLeft') {
            e.preventDefault();
            const prevIdx = (currentIdx - 1 + tabsArr.length) % tabsArr.length;
            tabsArr[prevIdx].focus();
            switchTab(tabsArr[prevIdx]);
        }
    });

    // ── Deep-link from URL hash ──
    function handleHash() {
        const hash = window.location.hash;
        if (hash && hash.startsWith('#tab-')) {
            const tabId = hash.replace('#tab-', '');
            const target = nav.querySelector(`.premium-tab[data-tab="${tabId}"]`);
            if (target) {
                switchTab(target);
                // Scroll to the tabs section smoothly
                const section = document.getElementById('tour-details');
                if (section) {
                    setTimeout(() => {
                        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 100);
                }
            }
        }
    }

    handleHash();
    window.addEventListener('hashchange', handleHash);

    // ── Initial indicator position ──
    const activeTab = nav.querySelector('.premium-tab.active');
    if (activeTab) {
        // Small delay to ensure layout is computed
        requestAnimationFrame(() => {
            moveIndicator(activeTab);
        });
    }

    // ── Reposition indicator on window resize ──
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            const active = nav.querySelector('.premium-tab.active');
            if (active) moveIndicator(active);
        }, 150);
    });
}
