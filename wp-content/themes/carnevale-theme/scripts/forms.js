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
