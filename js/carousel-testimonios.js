const track = document.querySelector(".carousel-track");
const cards = document.querySelectorAll(".card-testimonio");
const dotsContainer = document.querySelector(".carousel-dots");

let index = 0;
let interval;

function getVisibleCards(){
    if(window.innerWidth <= 600) return 1;
    if(window.innerWidth <= 900) return 2;
    return 4;
}

function updateCarousel(){

    const visible = getVisibleCards();
    const cardWidth = cards[0].offsetWidth;

    track.style.transform = `translateX(-${index * cardWidth}px)`;

    document.querySelectorAll(".carousel-dots span").forEach((dot,i)=>{
        dot.classList.toggle("active", i === index);
    });
}

function createDots(){

    const visible = getVisibleCards();
    const totalSlides = cards.length - visible + 1;

    dotsContainer.innerHTML = "";

    for(let i=0;i<totalSlides;i++){

        const dot = document.createElement("span");

        dot.addEventListener("click", ()=>{
            index = i;
            updateCarousel();
            resetAuto();
        });

        dotsContainer.appendChild(dot);
    }
}

function autoSlide(){

    const visible = getVisibleCards();
    const totalSlides = cards.length - visible + 1;

    index++;

    if(index >= totalSlides){
        index = 0;
    }

    updateCarousel();
}

function resetAuto(){
    clearInterval(interval);
    interval = setInterval(autoSlide,5000);
}

createDots();
updateCarousel();

interval = setInterval(autoSlide,5000);

window.addEventListener("resize", ()=>{
    createDots();
    updateCarousel();
});