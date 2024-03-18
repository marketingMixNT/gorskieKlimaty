


const handleIntersection = (entries, observer, animationClass) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            
            entry.target.classList.add(animationClass);
        }
    });
};

const createIntersectionObserver = (animationClass) => {
    return new IntersectionObserver(
        (entries, observer) => {
            handleIntersection(entries, observer, animationClass);
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        }
    );
};

const headingAnimation = document.querySelectorAll('.heading-animation')
const textAnimation = document.querySelectorAll('.text-animation')
const imageAnimationTop = document.querySelectorAll('.image-animation-top')


if (window.innerWidth > 768) {
    const observerHeading = createIntersectionObserver("tracking-in-expand");
    const observerText = createIntersectionObserver("text-focus-in");
    const observerImageTop = createIntersectionObserver("scale-in-ver-top");
   

    headingAnimation.forEach((element) => {
        observerHeading.observe(element);
    });

    textAnimation.forEach((element) => {
        observerText.observe(element);
    });
    imageAnimationTop.forEach((element) => {
        observerImageTop.observe(element);
    });
   
}