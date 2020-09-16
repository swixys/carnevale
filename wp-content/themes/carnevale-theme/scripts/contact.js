(async function () {
  await import('./forms.js');
  await import('./menu.js');
})();
const gallery = document.querySelector('.gallery');
const galleryItems = document.querySelectorAll('.gallery__item');
const galleryPrevBtn = document.querySelector('.gallery__controls .slider-control__prev');
const galleryNextBtn = document.querySelector('.gallery__controls .slider-control__next');

let currentViewItem = 0;

function scrollToNext() {
  if (currentViewItem < galleryItems.length) {
    currentViewItem++;
  }
  gallery.scrollTo({
    left: gallery.scrollLeft + gallery.scrollWidth / galleryItems.length,
    behavior: 'smooth'
  });
}

function scrollToPrev() {
  if (currentViewItem !== 0) {
    currentViewItem--;
  }
  gallery.scrollTo({
    left: gallery.scrollLeft - gallery.scrollWidth / galleryItems.length,
    behavior: 'smooth'
  });
}

galleryNextBtn.addEventListener('click', scrollToNext);
galleryPrevBtn.addEventListener('click', scrollToPrev);
