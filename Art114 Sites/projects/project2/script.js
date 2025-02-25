document.addEventListener('DOMContentLoaded', () => {
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    const content = document.getElementById('content');
    const heroHTML = document.querySelector('.hero-wrapper').outerHTML;

    // Mobile Menu Toggle
    mobileBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        navLinks.classList.toggle('active');
    });

    // Dropdown Handling
    document.querySelectorAll('.dropdown').forEach(dropdown => {
        const link = dropdown.querySelector('a');
        
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                
                // Close other dropdowns
                document.querySelectorAll('.dropdown').forEach(other => {
                    if (other !== dropdown) other.classList.remove('active');
                });
            }
        });
    });

    // Close menus when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.nav-links')) {
            navLinks.classList.remove('active');
            document.querySelectorAll('.dropdown').forEach(d => {
                d.classList.remove('active');
            });
        }
    });

    // Content System
    const pages = {
        schedule: `<section class="page"><h2>Conference Schedule</h2></section>`,
        keynote: `<section class="page"><h2>Keynote Speakers</h2></section>`,
        tickets: `<section class="page"><h2>Ticket Options</h2></section>`,
        // Add other pages here
    };

    const loadContent = (page) => {
        if (pages[page]) {
            content.innerHTML = pages[page];
        } else {
            content.innerHTML = ''; // Show only hero
        }
    };

    // Router
    const router = () => {
        const hash = window.location.hash.substring(1);
        loadContent(hash);
        
        // Update active nav item
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === `#${hash}`);
        });
    };

    // Event Listeners
    window.addEventListener('hashchange', router);
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            navLinks.classList.remove('active');
        }
    });

    // Initial Load
    router();
});