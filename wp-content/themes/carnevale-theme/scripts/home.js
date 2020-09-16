(async function() {
  const module = await import('./carousel.js');
  await import('./menu.js');
  new module.Carousel('.services ');
  new module.Carousel('.additional-services');
})()
