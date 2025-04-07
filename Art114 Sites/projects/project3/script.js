// DOM Elements
document.addEventListener('DOMContentLoaded', function() {
    // Like buttons functionality
    const likeButtons = document.querySelectorAll('.like-btn');
    
    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Toggle liked state
            if (this.classList.contains('liked')) {
                this.classList.remove('liked');
                this.textContent = '❤️';
            } else {
                this.classList.add('liked');
                this.textContent = '❤️';
                // Add animation or color change for like action
                this.style.transform = 'scale(1.2)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
            }
        });
    });
    
    // Comment form submission
    const commentForm = document.querySelector('.comment-form');
    if (commentForm) {
        commentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const commentText = this.querySelector('textarea').value.trim();
            if (!commentText) return;
            
            // Create new comment
            addNewComment(commentText);
            
            // Clear the form
            this.querySelector('textarea').value = '';
        });
    }
    
    // Post creation in blogs.html
    const postForm = document.querySelector('.post-input');
    if (postForm) {
        const postInput = postForm.querySelector('input');
        const postBtn = document.querySelector('.post-btn');
        
        postBtn.addEventListener('click', function() {
            const postText = postInput.value.trim();
            if (!postText) return;
            
            alert('Post created: ' + postText);
            postInput.value = '';
        });
    }
    
    // Login form
    const loginForm = document.querySelector('#login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = this.querySelector('#username').value;
            const password = this.querySelector('#password').value;
            
            if (username && password) {
                // Simulate login (would be handled server-side in a real app)
                alert('Login successful! Redirecting...');
                window.location.href = 'index.html';
            } else {
                alert('Please enter both username and password');
            }
        });
    }
    
    // Sign up form
    const signupForm = document.querySelector('#signup-form');
    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = this.querySelector('#username').value;
            const email = this.querySelector('#email').value;
            const password = this.querySelector('#password').value;
            const confirmPassword = this.querySelector('#confirm-password').value;
            
            if (username && email && password && confirmPassword) {
                if (password !== confirmPassword) {
                    alert('Passwords do not match!');
                    return;
                }
                
                // Simulate signup (would be handled server-side in a real app)
                alert('Account created successfully! Redirecting to login...');
                window.location.href = 'login.html';
            } else {
                alert('Please fill in all fields');
            }
        });
    }
    
    // Contact form
    const contactForm = document.querySelector('#contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = this.querySelector('#name').value;
            const surname = this.querySelector('#surname').value;
            const email = this.querySelector('#email').value;
            const message = this.querySelector('#message').value;
            
            if (name && surname && email && message) {
                // Simulate form submission
                alert('Thank you for your message! We will respond soon.');
                contactForm.reset();
            } else {
                alert('Please fill in all fields');
            }
        });
    }
});

// Function to add a new comment to the page
function addNewComment(text) {
    const commentsContainer = document.querySelector('.comments-container');
    if (!commentsContainer) return;
    
    const newComment = document.createElement('div');
    newComment.className = 'comment';
    
    const currentDate = new Date();
    const formattedDate = `${currentDate.toLocaleDateString()} at ${currentDate.toLocaleTimeString()}`;
    
    newComment.innerHTML = `
        <div class="comment-header">
            <span class="comment-author">Guest User</span>
            <span class="comment-date">${formattedDate}</span>
        </div>
        <div class="comment-text">
            ${text}
        </div>
    `;
    
    commentsContainer.prepend(newComment);
}

// Simulated data for user authentication
const users = [
    { username: 'user1', password: 'password1' },
    { username: 'user2', password: 'password2' }
];

// Simulated function to check if user is logged in
function isLoggedIn() {
    // In a real app, this would check session/local storage or cookies
    return false;
}