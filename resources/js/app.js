import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();



import "./partials/mobileMenu";
import "./partials/mobileBottomNav";
import "./partials/header";
import './partials/observer'
import './partials/preloader'
import './partials/filterGallery'
import './partials/glightbox'


import { createApp } from "vue";
import ApartamentsSwiper from "./Components/ApartamentsSwiper.vue";
import ApartmentMainImage from "./Components/ApartmentMainImage.vue";
import ApartmentSlider from "./Components/ApartmentSlider.vue";

const app1 = createApp({});
const app2 = createApp({});
const app3 = createApp({});

app1.component("apartaments-swiper", ApartamentsSwiper);
app2.component("apartament-main-image", ApartmentMainImage);
app3.component("apartament-slider", ApartmentSlider);

if (document.querySelector("#apartamentsSwiper")) {
  app1.mount("#apartamentsSwiper");
}

if (document.querySelector("#ApartmentMainImage")) {
  app2.mount('#ApartmentMainImage');
}

if (document.querySelector("#ApartmentSlider")) {
  app3.mount('#ApartmentSlider');
}