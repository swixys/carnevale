(async function() {
  const module = await import('./carousel.js');
  await import('./menu.js');
  new module.Carousel('.studio__gallery ');
})()
