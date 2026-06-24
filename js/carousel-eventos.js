const track = document.querySelector(".eventos-track");
const cards = document.querySelectorAll(".evento-card");
const dotsContainer = document.querySelector(".eventos-dots");

let index = 0;
let cardsPerView = 2;
let totalSlides = 0;
let autoSlide;

function calcularSlides() {
    cardsPerView = window.innerWidth <= 1024 ? 1 : 2;
    totalSlides = Math.ceil(cards.length / cardsPerView);
}

function crearDots() {
    dotsContainer.innerHTML = "";
    for(let i = 0; i < totalSlides; i++) {
        const dot = document.createElement("span");
        dot.classList.add("dot");
        if(i === index) {
            dot.classList.add("active");
        }
        dot.addEventListener("click", () => {
            index = i;
            moverCarrusel();
            reiniciarAutoSlide();
        });
        dotsContainer.appendChild(dot);
    }
}

function moverCarrusel() {
    const cardWidth = cards[0].offsetWidth + 30;
    const move = index * cardWidth * cardsPerView;
    cards.forEach(card => {
        card.classList.remove("evento-card-alone");
    });
    if(cards.length % 2 !== 0 && cardsPerView === 2) {

        const lastCard = cards[cards.length - 1];

        if(index === totalSlides - 1) {
            lastCard.classList.add("evento-card-alone");
        }

    }
    track.style.transform = `translateX(-${move}px)`;
    actualizarDots();
}

function actualizarDots() {
    const dots = document.querySelectorAll(".dot");
    dots.forEach(dot => dot.classList.remove("active"));
    if(dots[index]) {
        dots[index].classList.add("active");
    }
}

function iniciarAutoSlide() {
    autoSlide = setInterval(() => {
        index++;
        if(index >= totalSlides) {
            index = 0;
        }
        moverCarrusel();
    }, 5000);
}

function reiniciarAutoSlide() {
    clearInterval(autoSlide);
    iniciarAutoSlide();
}

function reiniciarCarrusel() {
    index = 0;
    calcularSlides();
    crearDots();
    moverCarrusel();
}

reiniciarCarrusel();
iniciarAutoSlide();
window.addEventListener("resize", () => {
    reiniciarCarrusel();
});