import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.min.css';
const lightbox = GLightbox({  loop:true });

import "./partials/mobileMenu";
import "./partials/mobileBottomNav";
import "./partials/header";
import './partials/observer'
import './partials/preloader'
import './partials/filterGallery'


import { createApp } from "vue";

import ApartamentsSwiper from "./Components/ApartamentsSwiper.vue";
import ApartmentMainImage from "./Components/ApartmentMainImage.vue";
import ApartmentSlider from "./Components/ApartmentSlider.vue";

const app = createApp({});
const app2 = createApp({})

app.component("apartaments-swiper", ApartamentsSwiper);
app.component("apartament-main-image", ApartmentMainImage );
app2.component("apartament-slider", ApartmentSlider );

app.mount("#apartamentsSwiper");
app.mount('#ApartmentMainImage')
app2.mount('#ApartmentSlider')