const body = document.querySelector('.page__body');
const menu = document.querySelector('.menu');
const headerMenu = document.querySelector('.header__menu');
const menuButton = document.querySelector('.menu__button');

function toggleMenu() {
  if (!headerMenu.classList.contains('open')) {
    body && body.classList.add('no-scroll');
    menu.classList.add('open');
    headerMenu.classList.add('open');
  } else {
    menu.classList.remove('open');
    headerMenu.classList.remove('open');
    body && body.classList.remove('no-scroll');
  }
}

function scrollPage() {
  if (window.pageYOffset > 0) {
    headerMenu.classList.add('sticky');
  } else {
    headerMenu.classList.remove('sticky');
  }
}

document.addEventListener('scroll', scrollPage);
menuButton.addEventListener('click', toggleMenu);
