import './bootstrap';
import { Splide } from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';
import AOS from 'aos';
import 'aos/dist/aos.css';


AOS.init();

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
