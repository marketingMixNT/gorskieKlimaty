const images = ["bg-1", "bg-2", "bg-3", "bg-4", "bg-5", "bg-6", "bg-7", ];
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