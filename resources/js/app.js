import './bootstrap';


const hamburgerBtn = document.querySelector('.hamburger')
const menu = document.querySelector('#menu')

const hamburgerHandler = () => {
    hamburgerBtn.classList.toggle("is-active");
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
}
hamburgerBtn.addEventListener('click',hamburgerHandler)



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