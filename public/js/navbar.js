// Боковая панель открыть закрыть
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.addEventListener("click", () => {
  navLinks.style.left = "0";
});
menuCloseBtn.addEventListener("click", () => {
  navLinks.style.left = "-100%";
});

// Подменю боковой панели открыть закрыть
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
let moreArrow = document.querySelector(".more-arrow");
let jsArrow = document.querySelector(".js-arrow");
navLinks.addEventListener("click", (event) => {
  if (event.target.classList.contains("htmlcss-arrow")) {
    navLinks.classList.toggle("show1");
  } else if (event.target.classList.contains("more-arrow")) {
    navLinks.classList.toggle("show2");
  } else if (event.target.classList.contains("js-arrow")) {
    navLinks.classList.toggle("show3");
  }
});
