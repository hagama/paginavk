const accessStep = document.querySelector('#access-step');
const formStep = document.querySelector('#form-step');
const accessForm = document.querySelector('#access-form');
const alumniForm = document.querySelector('#alumni-form');
const accessError = document.querySelector('#access-error');

accessForm.addEventListener('submit', (event) => {
  event.preventDefault();
  accessError.hidden = true;
  const cedula = document.querySelector('#access-id').value.trim();
  if (cedula !== '123') {
    accessError.textContent = 'Para esta vista previa, ingresa 123 como cédula.';
    accessError.hidden = false;
    document.querySelector('#access-id').focus();
    return;
  }

  document.querySelector('#document-id').value = cedula;
  accessStep.hidden = true;
  formStep.hidden = false;
  window.scrollTo({ top: 0, behavior: 'smooth' });
  document.querySelector('#form-title').focus({ preventScroll: true });
});

document.querySelector('#change-id').addEventListener('click', () => {
  formStep.hidden = true;
  accessStep.hidden = false;
  window.scrollTo({ top: 0, behavior: 'smooth' });
  document.querySelector('#access-id').focus({ preventScroll: true });
});

alumniForm.addEventListener('submit', (event) => {
  event.preventDefault();
  const feedback = document.querySelector('#form-feedback');
  feedback.textContent = 'Vista previa completada. Las respuestas aún no se guardan; la conexión se añadirá después.';
  feedback.hidden = false;
  feedback.scrollIntoView({ behavior: 'smooth', block: 'center' });
});
