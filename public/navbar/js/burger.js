// JavaScript to add class when navbar is displayed
document.addEventListener('DOMContentLoaded', function() {
    const toggleMenu = document.querySelector('.toggle-menu');
    const tabs = document.querySelector('.tabs');

    toggleMenu.addEventListener('click', function() {
        tabs.classList.toggle('active');
    });
});

