import './bootstrap';



// // Scroll Change Color Navbar
// const navbar = document.getElementById('navbar');
// window.onscroll = function () { 
//     if ( document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
//         navbar.classList.add("bg-white");
//         navbar.classList.remove("transparent");
//     } 
//     else {
//         navbar.classList.add("transparent");
//         navbar.classList.remove("bg-white");
//     }
// };

import { Splide } from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

var splide = new Splide( '#team-cards', {
    type: 'loop',
    perPage: 3,
    perMove: 1,
    gap: '1.5rem',
    drag: false,
    snap: false,
    pagination: false,
    arrows: false,
    breakpoints: {
        768: {
            perPage: 2.5,
        },
        640: {
            perPage: 1,
        }
    },
    autoScroll: {
        speed: 0.8,
    },
});

splide.mount( { AutoScroll } );
