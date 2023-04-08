// Этот JavaScript-код создает анимированный эффект на вашем сайте, 
// который напоминает машинопись. Он использует библиотеку Typed.js, 
// которая создает печатающий эффект на странице.

var typed = new Typed(".multiple-text", {
    strings: [
        "Software Engineer",
        "Web Designer Programmer",
        "System Administrator"
    ],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});