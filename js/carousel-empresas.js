const track = document.getElementById("logosTrack");
const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");
const logos = document.querySelectorAll(".client-logo");
let index = 0;

function obtenerLogosVisibles() {
    if (window.innerWidth <= 576) return 1;
    if (window.innerWidth <= 992) return 2;
    return 4;
}

function obtenerIndiceMaximo() {
    return Math.max(0, logos.length - obtenerLogosVisibles());
}

function obtenerAncho() {
    return logos[0].clientWidth;
}

function actualizarCarrusel() {
    const ancho = obtenerAncho();
    track.style.transform = `translateX(-${index * ancho}px)`;
}

function siguienteLogo() {
    index++;
    if (index > obtenerIndiceMaximo()) {
        index = 0;
    }
    actualizarCarrusel();
}

function anteriorLogo() {
    index--;
    if (index < 0) {
        index = obtenerIndiceMaximo();
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

window.addEventListener("resize", () => {
    if (index > obtenerIndiceMaximo()) {
        index = obtenerIndiceMaximo();
    }
    actualizarCarrusel();
});
