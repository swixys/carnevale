(async function() {
  await import('./menu.js');
})()

const body = document.querySelector('.page__body');

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

const skillsList = document.querySelectorAll('.skills .caption');
if (skillsList.length) {
  skillsList.forEach((skill) => {
      skill.addEventListener('click', openDrawer(skill.getAttribute('id')));
    }
  );
}

const closeButtons = document.querySelectorAll('.drawer .close');
if (closeButtons.length) {
  closeButtons.forEach((button) => {
      button.addEventListener('click', closeDrawer(button.closest('.drawer').getAttribute('id')));
    }
  );
}
