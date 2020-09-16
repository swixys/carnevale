// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});

class Carousel {
    constructor(selector, useResize = false) {
        this.parentElement = document.querySelector(selector);
        this.slideIndex = 0;
        this.useResize = useResize;
        this.carouselNext = document.querySelector(`${selector} .carousel__controls .slider-control__next`);
        this.carouselPrev = document.querySelector(`${selector} .carousel__controls .slider-control__prev`);
        this.tabs = document.querySelectorAll(`${selector} .service-carousel`);
        this.slides = document.querySelectorAll(`${selector} .carousel__slide`);
        this.slidesContainer = document.querySelector(`${selector} .carousel__slides`);
        if (this.slides.length) {
            this.init();
        }
    }

    init() {
        this.plusSlides = this.plusSlides.bind(this);
        this.showSlides = this.showSlides.bind(this);
        this.calculateCurrentSlide = this.calculateCurrentSlide.bind(this);
        this.calculateSlideHeight = this.calculateSlideHeight.bind(this);
        this.handleResize = this.handleResize.bind(this);

        this.showSlides(this.slideIndex);
        this.calculateCurrentSlide();
        this.carouselNext.addEventListener('click', this.plusSlides(1));
        this.carouselPrev.addEventListener('click', this.plusSlides(-1));
        this.slidesContainer.addEventListener('scroll', this.calculateCurrentSlide);
        window.addEventListener('load', this.calculateCurrentSlide)
        window.addEventListener('resize', this.handleResize)

        if (this.tabs.length) {
            for (let i = 0; i < this.tabs.length; i++) {
                this.tabs[i].addEventListener('click', this.currentSlide(i));
            }
        }
    }

    handleResize(e) {
        if (this.useResize) {
            if (e.target.screen.width < 320) {
                this.slidesContainer.removeAttribute('style')
            } else {
                this.calculateSlideHeight();
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

    calculateSlideHeight() {
        const getComputedHeight = (element) => parseInt(window.getComputedStyle(element).getPropertyValue('margin-top')) +
            parseInt(window.getComputedStyle(element).getPropertyValue('margin-bottom')) +
            parseInt(window.getComputedStyle(element).getPropertyValue('padding-top')) +
            parseInt(window.getComputedStyle(element).getPropertyValue('padding-bottom'))

        const slideImageWrapper = this.slides[this.slideIndex].querySelector('.carousel__image-wrapper')
        const minHeight = slideImageWrapper.getBoundingClientRect().height + getComputedHeight(slideImageWrapper);
        const captionContent = this.slides[this.slideIndex].querySelector('.carousel__caption-content');
        let captionHeight = 0;
        if (captionContent) {
            captionHeight = captionContent.getBoundingClientRect().height;
        }
        const caption = this.slides[this.slideIndex].querySelector('.carousel__caption');
        let captionPaddings = 0;
        if (caption) {
            captionPaddings = parseInt(window.getComputedStyle(caption).getPropertyValue('padding-top')) +
                parseInt(window.getComputedStyle(caption).getPropertyValue('padding-bottom'));
        }
        const button = this.slides[this.slideIndex].querySelector('.carousel__caption-button');
        let buttonHeight = 0;
        if (button) {
            buttonHeight = button.getBoundingClientRect().height + getComputedHeight(button);
        }

        if (captionHeight + buttonHeight + captionPaddings >= minHeight) {
            this.slidesContainer.style = `height: ${captionHeight + captionPaddings}px`;
        } else {
            this.slidesContainer.style = `height: ${minHeight}px`;

        }
        if (window.screen.width < 680) {
            this.slidesContainer.style = `height: ${captionHeight + captionPaddings + minHeight + 45}px`;
        }
    }

    calculateCurrentSlide() {
        const slideWidth = this.slidesContainer.scrollWidth / this.slides.length;
        this.slideIndex = Math.round(this.slidesContainer.scrollLeft / slideWidth);
        if (
            window.screen.width >= 320 &&
            this.useResize &&
            Math.floor(this.slidesContainer.scrollLeft) >= this.slidesContainer.scrollWidth / this.slides.length * this.slideIndex - 3 &&
            Math.floor(this.slidesContainer.scrollLeft) <= this.slidesContainer.scrollWidth / this.slides.length * this.slideIndex + 3
        ) {
            this.calculateSlideHeight();
        }
        this.tabs.length && this.updateTabs();
    }

    showSlides(n) {

        if (n === this.slides.length) {
            this.slideIndex = 0;
        }
        if (n < 0) {
            this.slideIndex = this.slides.length - 1;
        }
        this.slidesContainer.scrollTo({
            left: this.slidesContainer.scrollWidth / this.slides.length * this.slideIndex,
            behavior: 'smooth'
        });
        this.tabs.length && this.updateTabs();
        //this.useResize && this.calculateSlideHeight();

    }

    updateTabs() {
        for (let i = 0; i < this.slides.length; i++) {
            this.tabs[i].classList.remove("active");
        }
        this.tabs[this.slideIndex].classList.add("active");
    }
}

const body = document.querySelector('.page__body');
const video = document.querySelector('.video__media');
const videoButton = document.querySelector('.video__button');
const menu = document.querySelector('.menu');
const headerMenu = document.querySelector('.header__menu');
const menuButton = document.querySelector('.menu__button');
const closeButtons = document.querySelectorAll('.drawer .close');
const skillsList = document.querySelectorAll('.skills .caption');

const inputs = document.querySelectorAll('input');
const textAreas = document.querySelectorAll('textarea');
const forms = document.querySelectorAll('form');

function setInvalidForm(e) {
    function getValidationStatus(element) {
        if (!element.validity.valid) {
            element.parentElement.classList.add('error');
            e.preventDefault();
        } else {
            element.parentElement.classList.remove('error');
        }
    }

    if (inputs.length) {
        inputs.forEach(getValidationStatus);
    }
    if (textAreas.length) {
        textAreas.forEach(getValidationStatus);
    }
}

if (forms.length) {
    forms.forEach((form) =>
        form.addEventListener('submit', setInvalidForm)
    );
}

//textArea autosize
function getTextareaHeight() {
    let initialHeight = 0;
    let borderWidth = 0;
    let maxHeight = 0;

    return (e) => {
        const elem = e.target;
        const elemStyles = window.getComputedStyle(e.target);
        if (initialHeight === 0) {
            initialHeight = elemStyles.height;
            borderWidth = parseInt(elemStyles.borderBottomWidth);
            maxHeight = parseInt(elemStyles.maxHeight);
        }

        elem.style.height = initialHeight;

        if (elem.scrollHeight < maxHeight) {

            elem.style.height = `${elem.scrollHeight + borderWidth}px`;

        } else {
            elem.style.height = `${maxHeight}px`;
        }
        if (elem.scrollHeight < initialHeight) {
            elem.style.height = initialHeight;
        }
    };
}

if (textAreas.length) {
    textAreas.forEach(textarea => {
        textarea.addEventListener('keyup', getTextareaHeight());
    });
}

function playVideo() {
    if (video.paused || video.ended) {
        video.play();
    } else {
        video.pause();
    }
}

videoButton && videoButton.addEventListener('click', playVideo);


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
    if (window.pageYOffset > 50) {
        headerMenu.classList.add('sticky');
    } else {
        headerMenu.classList.remove('sticky');
    }
}

document.addEventListener('scroll', scrollPage);
menuButton.addEventListener('click', toggleMenu);


function openDrawer(id) {
    return () => {
        body && body.classList.add('no-scroll-drawer');
        console.log(`.drawer_${id}`);
        document.querySelector(`#drawer_${id}`).classList.add('open');
    };
}

function closeDrawer(id) {
    return () => {
        body && body.classList.remove('no-scroll-drawer');
        document.querySelector(`#${id}`).classList.remove('open');
    };
}

if (skillsList.length) {
    skillsList.forEach((skill) => {
            skill.addEventListener('click', openDrawer(skill.getAttribute('id')));
        }
    );
}

if (closeButtons.length) {
    closeButtons.forEach((button) => {
            button.addEventListener('click', closeDrawer(button.closest('.drawer').getAttribute('id')));
        }
    );
}

const gallery = document.querySelector('.gallery');
const galleryItems = document.querySelectorAll('.gallery__item');
const galleryPrevBtn = document.querySelector('.gallery__controls .slider-control__prev');
const galleryNextBtn = document.querySelector('.gallery__controls .slider-control__next');
let currentViewItem = 0;
if (gallery) {
    calculateGalleryWidth();
    window.addEventListener('resize', calculateGalleryWidth)
}
function calculateGalleryWidth() {
    gallery.style = `width: calc(100% + ${
        (window.screen.width - document.querySelector('.contact').getBoundingClientRect().width) / 2 +
        parseInt(window.getComputedStyle(document.querySelector('.contact')).getPropertyValue('padding-right'))
    }px)`;
}
function scrollToNext() {
    const countViewElements = Math.floor(gallery.getBoundingClientRect().width / (gallery.scrollWidth / galleryItems.length))
    currentViewItem++;
    if (currentViewItem > galleryItems.length - countViewElements) {
        currentViewItem = 0
    }
    gallery.scrollTo({
        left: gallery.scrollWidth / galleryItems.length * currentViewItem,
        behavior: 'smooth'
    });
}
function scrollToPrev() {
    const countViewElements = Math.floor(gallery.getBoundingClientRect().width / (gallery.scrollWidth / galleryItems.length))
    currentViewItem--;
    if (currentViewItem < 0) {
        currentViewItem = galleryItems.length - countViewElements
    }
    gallery.scrollTo({
        left: gallery.scrollWidth / galleryItems.length * currentViewItem,
        behavior: 'smooth'
    });
}
galleryNextBtn && galleryNextBtn.addEventListener('click', scrollToNext);
galleryPrevBtn && galleryPrevBtn.addEventListener('click', scrollToPrev);



new Carousel('.studio__gallery ');
new Carousel('.services ', true);
new Carousel('.additional-services');
new Carousel('.about ');
