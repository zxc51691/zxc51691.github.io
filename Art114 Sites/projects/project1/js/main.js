document.addEventListener('DOMContentLoaded', function() {
    // Handle form submissions
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');

    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            window.location.href = 'feed.php';
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            window.location.href = 'feed.php';
        });
    }
    
    // Mobile Navigation
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const closeMobileNav = document.getElementById('closeMobileNav');
    const mobileNav = document.getElementById('mobileNav');

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileNav.classList.add('mobile-nav-active');
        });
    }

    if (closeMobileNav) {
        closeMobileNav.addEventListener('click', function() {
            mobileNav.classList.remove('mobile-nav-active');
        });
    }
    // Like button functionality
    const likeButtons = document.querySelectorAll('.like-button');
    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            this.classList.toggle('text-red-500');
            this.classList.toggle('fill-current');
        });
    });

    // Dark mode toggle
    const darkModeToggle = document.getElementById('darkModeToggle');
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', function() {
            document.body.classList.toggle('dark');
            // Save preference to localStorage
            const isDark = document.body.classList.contains('dark');
            localStorage.setItem('darkMode', isDark);
        });
    }
    
});