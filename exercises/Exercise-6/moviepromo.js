document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for navigation links
    document.querySelectorAll('#moviepromo-nav-menu a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const navbarHeight = document.querySelector('#moviepromo-nav').offsetHeight;
                const targetPosition = targetElement.offsetTop - navbarHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Carousel auto-play configuration
    const carousel = new bootstrap.Carousel(document.querySelector('#moviepromo-carousel'), {
        interval: 5000,
        keyboard: true
    });

    // Add animation classes to cast cards when they come into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.cast-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        observer.observe(card);
    });

    // Enhance review cards with fade-in effect
    document.querySelectorAll('.review-card').forEach(review => {
        review.style.opacity = '0';
        review.style.transform = 'translateX(-20px)';
    });

    const reviewObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateX(0)';
                entry.target.style.transition = 'all 0.5s ease-in-out';
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.review-card').forEach(review => {
        reviewObserver.observe(review);
    });
});