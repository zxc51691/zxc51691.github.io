document.addEventListener('DOMContentLoaded', function() {

    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.querySelector('.modal');
    const modalImg = document.querySelector('.modal-content img');
    const closeButton = document.querySelector('.close-button');

    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            // Get the source of the clicked image
            const imgSrc = this.querySelector('img').src;
            
            // Set the modal image source to the clicked image
            modalImg.src = imgSrc;
            
            // Display the modal
            modal.style.display = 'flex';
        });
    });

    // Close modal when close button is clicked
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
    });
});