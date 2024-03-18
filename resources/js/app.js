import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

import "./partials/mobileMenu";
import "./partials/mobileBottomNav";
import "./partials/header";
import './partials/observer'


import { createApp } from "vue";

import ApartamentsSwiper from "./Components/ApartamentsSwiper.vue";

const app = createApp({});

app.component("apartaments-swiper", ApartamentsSwiper);

const mountedApp = app.mount("#apartamentsSwiper");
