const BREAKPOINT_MOBILE = 768;

// Cache DOM elements
const navElements = {
    nav: null,
    navLinks: null,
    mobileButton: null
};

// Utility functions
const $ = selector => document.querySelector(selector);
const $$ = selector => document.querySelectorAll(selector);

const smoothScroll = (e) => {
    e.preventDefault();
    $(e.target.getAttribute('href'))?.scrollIntoView({ behavior: 'smooth' });
};

const createMobileMenu = () => {
    const button = document.createElement('button');
    button.className = 'mobile-menu-button';
    button.setAttribute('aria-label', 'Toggle mobile menu');
    button.innerHTML = '☰';
    return button;
};

const toggleMobileMenu = () => {
    const { navLinks } = navElements;
    const isVisible = navLinks.style.display === 'flex';
    navLinks.style.display = isVisible ? 'none' : 'flex';
};

const setupMobileMenu = () => {
    if (!navElements.nav) {
        navElements.nav = $('.nav');
        navElements.navLinks = $('.nav-links');
    }

    const isMobile = window.innerWidth <= BREAKPOINT_MOBILE;
    const { nav, navLinks } = navElements;

    if (isMobile && !navElements.mobileButton) {
        const button = createMobileMenu();
        nav.insertBefore(button, navLinks);
        button.addEventListener('click', toggleMobileMenu);
        navElements.mobileButton = button;
        navLinks.style.display = 'none';
    } else if (!isMobile) {
        navElements.mobileButton?.remove();
        navElements.mobileButton = null;
        navLinks.style.display = 'flex';
    }
};

const setupMenuTabs = () => {
    const tabs = $$('.tab-button');
    const sections = $$('.menu-section');
    
    const showMenuSection = (categoryId) => {
        sections.forEach(section => {
            section.style.display = section.id === categoryId ? 'block' : 'none';
        });
    };

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            showMenuSection(tab.dataset.category);
        });
    });
};

// Initialize with performance optimizations
const init = () => {
    // Setup smooth scrolling with event delegation
    document.body.addEventListener('click', e => {
        const anchor = e.target.closest('a[href^="#"]');
        if (anchor) smoothScroll(e);
    });

    // Setup mobile menu with debounced resize handler
    setupMobileMenu();
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(setupMobileMenu, 250);
    });

    // Setup menu tabs if on menu page
    if ($('.menu-categories')) {
        setupMenuTabs();
    }

    // Setup lazy loading for images
    $$('img').forEach(img => {
        if (!img.hasAttribute('loading')) {
            img.setAttribute('loading', 'lazy');
        }
    });
};

// Use DOMContentLoaded for initial setup
document.addEventListener('DOMContentLoaded', init);