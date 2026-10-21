const accessStep = document.querySelector('#access-step');
const formStep = document.querySelector('#form-step');
const accessForm = document.querySelector('#access-form');
const alumniForm = document.querySelector('#alumni-form');
const accessError = document.querySelector('#access-error');
const feedback = document.querySelector('#form-feedback');
let csrf = '';

async function api(action, documentId, data = undefined) {
  if (!csrf) {
    const session = await fetch('api.php', { credentials: 'same-origin', cache: 'no-store' });
    if (!session.ok) throw new Error('No se pudo iniciar la sesión.');
    csrf = (await session.json()).csrf;
  }
  const response = await fetch('api.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    credentials: 'same-origin',
    body: JSON.stringify({ action, document_id: documentId, data, csrf }),
  });
  const result = await response.json().catch(() => ({}));
  if (!response.ok) throw new Error(result.error || 'No se pudo completar la solicitud.');
  return result;
}

function fill(data) {
  alumniForm.reset();
  for (const [name, value] of Object.entries(data)) {
    if (value === null || value === undefined || value === '') continue;
    const controls = alumniForm.querySelectorAll(`[name="${name}"]`);
    if (!controls.length) continue;
    if (controls[0].type === 'radio') {
      const selected = [...controls].find((control) => control.value === value);
      if (selected) selected.checked = true;
    } else if (controls[0].tagName === 'SELECT') {
      const select = controls[0];
      if (![...select.options].some((option) => option.value === String(value))) {
        select.add(new Option(String(value), String(value)));
      }
      select.value = String(value);
    } else {
      controls[0].value = String(value);
    }
  }
}

accessForm.addEventListener('submit', async (event) => {
  event.preventDefault();
  accessError.hidden = true;
  const documentId = document.querySelector('#access-id').value.replace(/[.\s-]+/g, '');
  if (!/^[0-9]{3,20}$/.test(documentId)) {
    accessError.textContent = 'Ingresa una cédula válida de 3 a 20 dígitos.';
    accessError.hidden = false;
    return;
  }
  const button = accessForm.querySelector('[type="submit"]');
  button.disabled = true;
  try {
    const result = await api('lookup', documentId);
    fill(result.data);
    document.querySelector('#document-id').value = documentId;
    feedback.hidden = true;
    accessStep.hidden = true;
    formStep.hidden = false;
    window.scrollTo({ top: 0, behavior: 'smooth' });
    document.querySelector('#form-title').focus({ preventScroll: true });
  } catch (error) {
    accessError.textContent = error.message;
    accessError.hidden = false;
  } finally {
    button.disabled = false;
  }
});

document.querySelector('#change-id').addEventListener('click', () => {
  formStep.hidden = true;
  accessStep.hidden = false;
  window.scrollTo({ top: 0, behavior: 'smooth' });
  document.querySelector('#access-id').focus({ preventScroll: true });
});

alumniForm.addEventListener('submit', async (event) => {
  event.preventDefault();
  feedback.hidden = true;
  if (!alumniForm.reportValidity()) return;
  const data = Object.fromEntries(new FormData(alumniForm).entries());
  const button = alumniForm.querySelector('[type="submit"]');
  button.disabled = true;
  try {
    const result = await api('save', data.document_id, data);
    feedback.textContent = result.message;
    feedback.hidden = false;
  } catch (error) {
    feedback.textContent = error.message;
    feedback.hidden = false;
  } finally {
    button.disabled = false;
    feedback.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
});
