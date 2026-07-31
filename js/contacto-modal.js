document.addEventListener("DOMContentLoaded", function () {

    const modal = document.getElementById("modalContacto");
    const abrir = document.getElementById("abrirModalContacto");

    if (!modal || !abrir) {
        console.error("No se encontró el modal o el botón.");
        return;
    }

    const cerrarBotones = modal.querySelectorAll("[data-close-contact-modal]");
    const formulario = document.getElementById("contactForm");
    const empresaField = document.getElementById("empresaField");
    const empresa = document.getElementById("empresa");
    const perfil = document.getElementById("perfil");
    const status = document.getElementById("contactStatus");
    const submit = document.getElementById("contactSubmit");

    // ===========================
    // Abrir Modal
    // ===========================

    abrir.addEventListener("click", function (e) {
        e.preventDefault();

        modal.classList.add("is-open");
        modal.setAttribute("aria-hidden", "false");
        document.body.classList.add("modal-contacto-abierto");

        setTimeout(function () {
            document.getElementById("nombre").focus();
        }, 100);
    });

    // ===========================
    // Cerrar Modal
    // ===========================

    cerrarBotones.forEach(function (btn) {

        btn.addEventListener("click", function () {

            modal.classList.remove("is-open");
            modal.setAttribute("aria-hidden", "true");
            document.body.classList.remove("modal-contacto-abierto");

        });

    });

    document.addEventListener("keydown", function (e) {

        if (e.key === "Escape") {

            modal.classList.remove("is-open");
            modal.setAttribute("aria-hidden", "true");
            document.body.classList.remove("modal-contacto-abierto");

        }

    });

    // ===========================
    // Personas / Empresas
    // ===========================

    document.querySelectorAll(".segment").forEach(function (btn) {

        btn.addEventListener("click", function () {

            document.querySelectorAll(".segment").forEach(function (b) {

                b.classList.remove("active");
                b.setAttribute("aria-selected", "false");

            });

            btn.classList.add("active");
            btn.setAttribute("aria-selected", "true");

            perfil.value = btn.dataset.value;

            if (btn.dataset.value === "empresas") {

                empresaField.hidden = false;
                empresa.required = true;

            } else {

                empresaField.hidden = true;
                empresa.required = false;
                empresa.value = "";

            }

        });

    });

    // ===========================
    // Enviar Formulario
    // ===========================

    formulario.addEventListener("submit", function (e) {

        e.preventDefault();

        if (!formulario.checkValidity()) {

            formulario.reportValidity();
            return;

        }

        submit.disabled = true;
        submit.innerHTML = "Enviando...";

        fetch(formulario.action, {

            method: "POST",
            body: new FormData(formulario)

        })

        .then(function (r) {

            return r.json();

        })

        .then(function (data) {

            status.className = "contact-status show";

            if (data.ok) {

                status.classList.add("success");
                status.innerHTML = data.message;

                formulario.reset();

                empresaField.hidden = true;
                empresa.required = false;
                perfil.value = "personas";

                document.querySelectorAll(".segment").forEach(function (b) {

                    b.classList.remove("active");

                    if (b.dataset.value === "personas") {

                        b.classList.add("active");

                    }

                });

            } else {

                status.classList.add("error");
                status.innerHTML = data.message;

            }

        })

        .catch(function () {

            status.className = "contact-status show error";
            status.innerHTML = "Ocurrió un error enviando el formulario.";

        })

        .finally(function () {

            submit.disabled = false;
            submit.innerHTML = "Enviar";

        });

    });

});