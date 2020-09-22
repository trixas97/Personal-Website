let menuIcon = document.querySelector('.hamburger-button');
let closeIcon = document.querySelector('.close-menu-icon');
let menu = document.querySelector('.menu');

menuIcon.addEventListener('click', () => {
   menu.classList.toggle('menu-visible');
});

closeIcon.addEventListener('click', () => {
    menu.classList.toggle('menu-visible');
})