$(".menu__list li").addClass("menu__item");
$(".menu__list li a").addClass("menu__link");


class Carousel {
  constructor(selector) {
    this.parentElement = document.querySelector(selector);
    this.slideIndex = 1;
    this.carouselNext = document.querySelector(`${selector} .carousel__controls .slider-control__next`);
    this.carouselPrev = document.querySelector(`${selector} .carousel__controls .slider-control__prev`);
    this.tabs = document.querySelectorAll(`${selector} .service-carousel`);
    this.slides = document.querySelectorAll(`${selector} .carousel__slide`);
    this.init();
  }

  init() {
    this.plusSlides = this.plusSlides.bind(this);
    this.showSlides = this.showSlides.bind(this);

    this.showSlides(this.slideIndex);
    this.carouselNext.addEventListener('click', this.plusSlides(1));
    this.carouselPrev.addEventListener('click', this.plusSlides(-1));
    if (this.tabs.length) {
      for (let i = 0; i < this.tabs.length; i++) {
        this.tabs[i].addEventListener('click', this.currentSlide(i + 1));
      }
    }
    // window.addEventListener('resize', function (event) {
    //   console.log('resize', event.target.screen.width);
    //   const slides = document.getElementsByClassName("carousel__slide");
    //   // if(event.target.screen.width>680) {
    //   //   for (let i = 0; i < slides.length; i++) {
    //   //     slides[i].classList.remove('display-none');
    //   //   }
    //   // }else{
    //   //   showSlides(slideIndex)
    //   // }
    // });
  }

  // Next/previous controls
  plusSlides(n) {
    return () => {
      this.showSlides(this.slideIndex += n);
    };
  }

// Thumbnail image controls
  currentSlide(n) {
    return () => {
      this.showSlides(this.slideIndex = n);
    };
  }

  showSlides(n) {
    let i;
    if (n > this.slides.length) {
      this.slideIndex = 1;
    }
    if (n < 1) {
      this.slideIndex = this.slides.length;
    }
    for (i = 0; i < this.slides.length; i++) {
      this.slides[i].classList.add('display-none');
      if (this.tabs.length) {
        this.tabs[i].classList.remove("active");
      }
    }
    this.slides[this.slideIndex - 1].classList.remove('display-none');
    if (this.tabs.length) {
      this.tabs[this.slideIndex - 1].classList.add("active");
    }
  }
}


const body = document.querySelector('.page__body');
const menu = document.querySelector('.menu');
const headerMenu = document.querySelector('.header__menu');
const menuButton = document.querySelector('.menu__button');

function toggleMenu() {
  if (headerMenu.classList.contains('open')) {
    menu.classList.remove('open');
    headerMenu.classList.remove('open');
    body && body.classList.remove('no-scroll');
  } else {
    body && body.classList.add('no-scroll');
    menu.classList.add('open');
    headerMenu.classList.add('open');
  }
}

function scrollPage() {
  if (window.pageYOffset > 0) {
    headerMenu.classList.add('sticky');
  } else {
    headerMenu.classList.remove('sticky');
  }
}

menuButton.addEventListener('click', toggleMenu);
document.addEventListener('scroll', scrollPage);
new Carousel('.services');
new Carousel('.additional-services');


