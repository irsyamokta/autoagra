import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function() {
    const mainImage = document.getElementById("mainImage");
    const thumbnails = document.querySelectorAll(".thumbnail");

    thumbnails.forEach((thumbnail) => {
        thumbnail.addEventListener("click", function() {
            mainImage.src = thumbnail.src;
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const scrollButton = document.getElementById('scroll');
    const heroSection = document.getElementById('beranda');

    function toggleButtonVisibility() {
        const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
        if (window.scrollY >= heroBottom) {
            scrollButton.style.display = 'block';
        } else {
            scrollButton.style.display = 'none';
        }
    }

    toggleButtonVisibility();

    window.addEventListener('scroll', toggleButtonVisibility);
});
