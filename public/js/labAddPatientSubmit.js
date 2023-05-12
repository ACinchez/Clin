const dropdown = document.getElementById('inputlang');
const submitBtn = document.getElementById('lab-submit');

dropdown.addEventListener('change', function() {
  if (dropdown.value !== '') {
    submitBtn.removeAttribute('disabled');
  } else {
    submitBtn.setAttribute('disabled', '');
  }
});
