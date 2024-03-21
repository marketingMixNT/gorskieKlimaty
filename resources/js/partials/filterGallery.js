let filterItem = document.querySelector(".items-links");
let filteImages = document.querySelectorAll('.grid-item');

// window.addEventListener("load", () => {
//     filterItem.addEventListener("click", (selectedItem) => {
//         if (selectedItem.target.classList.contains("item-link")) {
//             document
//                 .querySelector(".menu-active")
//                 .classList.remove("menu-active");
//             selectedItem.target.classList.add("menu-active");
//             let filterName = selectedItem.target.getAttribute("data-name");
//             filteImages.forEach((image) => {
//                 let filterImages = image.getAttribute("data-name");
//                 if (filterImages == filterName || filterName == "all") {
//                     image.style.display = "block";
//                 } else {
//                     image.style.display = "none";
//                 }
//             });
//         }
//     });
// });

window.addEventListener("load", () => {
    filterItem.addEventListener("click", (selectedItem) => {
        if (selectedItem.target.classList.contains("item-link")) {
            document
                .querySelector(".menu-active")
                .classList.remove("menu-active");
            selectedItem.target.classList.add("menu-active");
            let filterName = selectedItem.target.getAttribute("data-name");
            filteImages.forEach((image) => {
                let filterImages = image.getAttribute("data-name");
                if (filterImages == filterName || filterName == "all") {
                    image.style.display = "block";
                    image.classList.remove("hide-animation");
                } else {
                    image.classList.add("hide-animation");
                    setTimeout(() => {
                        if (image.classList.contains("hide-animation")) {
                            image.style.display = "none";
                        }
                    }, 200); // czas trwania animacji
                }
            });
        }
    });
});