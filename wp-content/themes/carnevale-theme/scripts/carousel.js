export class Carousel {
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
