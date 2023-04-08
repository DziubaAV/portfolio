// Скрипт добавляет обработчик событий клика на элемент с id "menu-icon", 
// чтобы переключать класс "active" для элемента с классом "navbar", 
// чтобы отображать и скрывать меню на веб-странице при клике на иконку меню.

let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click', function() {
navbar.classList.toggle('active');
});