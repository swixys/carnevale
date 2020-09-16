(async function() {
  const module = await import('./carousel.js');
  await import('./menu.js');
  await import('./video.js');
  new module.Carousel('.about ');
})()
