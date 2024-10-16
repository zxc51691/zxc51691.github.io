document.addEventListener('DOMContentLoaded', function() {
    const dropbtn = document.querySelector('.dropbtn');
    const dropdown = document.querySelector('.dropdown');
    const dropdownContent = document.querySelector('.dropdown-content');
    const dropdownIcon = document.querySelector('.dropdown-icon');

    // Function to toggle dropdown
    function toggleDropdown() {
        dropdown.classList.toggle('open');
        const isOpen = dropdown.classList.contains('open');
        dropdownIcon.style.transform = isOpen ? 'rotate(180deg)' : 'rotate(0deg)';
    }

    // Toggle dropdown on button click/touch
    dropbtn.addEventListener('click', function(e) {
        e.preventDefault();
        toggleDropdown();
    });

    // Close dropdown when clicking/touching outside
    document.addEventListener('click', function(e) {
        if (!dropdown.contains(e.target)) {
            dropdown.classList.remove('open');
            dropdownIcon.style.transform = 'rotate(0deg)';
        }
    });

    // Prevent dropdown from closing when clicking inside it
    dropdownContent.addEventListener('click', function(e) {
        e.stopPropagation();
    });

});