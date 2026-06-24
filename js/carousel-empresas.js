const track = document.getElementById("logosTrack");
const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");
const logos = document.querySelectorAll(".logos-track img");
let index = 0;
const totalLogos = logos.length / 2;

function obtenerAncho() {
    return logos[0].clientWidth;
}

function actualizarCarrusel() {
    const ancho = obtenerAncho();
    track.style.transform = `translateX(-${index * ancho}px)`;
}

function siguienteLogo() {
    index++;
    if (index >= totalLogos) {
        index = 0;
    }
    actualizarCarrusel();
}

function anteriorLogo() {
    index--;
    if (index < 0) {
        index = totalLogos - 1;
    }
    actualizarCarrusel();
}

let autoplay = setInterval(siguienteLogo, 2000);

nextBtn.addEventListener("click", () => {
    clearInterval(autoplay);
    siguienteLogo();
    autoplay = setInterval(siguienteLogo, 2000);
});

prevBtn.addEventListener("click", () => {
    clearInterval(autoplay);
    anteriorLogo();
    autoplay = setInterval(siguienteLogo, 2000);
});

window.addEventListener("resize", actualizarCarrusel);