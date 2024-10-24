import mobileNav from './modules/mobile-nav.js';
import gallerySlider from "./modules/gallery-slider";
import gsReveal from './modules/gs-reveal.js';
import modalForm from "./modules/modal.js";
document.addEventListener('DOMContentLoaded', ()=> {

    mobileNav();
    gsReveal.init();
    gallerySlider();
    modalForm();

    const btnToUp = document.querySelector('.js-button-to-up');
    btnToUp.addEventListener('click', () => {

        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });

    });

})
// import isAvifWebp from 'avif-webp-checker';
// isAvifWebp({ mode: 'webp' });
