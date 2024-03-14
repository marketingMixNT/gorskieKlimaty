import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


import'./partials/mobileMenu'






const images = ["bg-1", "bg-2"];
let index = 0;
const header = document.querySelector("#header");



const changeBackground = () => {
    images.forEach(function (bgClass) {
        header.classList.remove(bgClass);
    });

    header.classList.add(images[index]);
    index = (index + 1) % images.length;
};

if(header){
    setInterval(changeBackground, 5000);
}