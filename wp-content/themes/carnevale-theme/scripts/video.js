const video = document.querySelector('.video__media');
const videoButton = document.querySelector('.video__button');

function playVideo() {
  if (video.paused || video.ended) {
    video.play();
  } else {
    video.pause();
  }
}

videoButton.addEventListener('click', playVideo);
