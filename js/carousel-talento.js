document.addEventListener("DOMContentLoaded", function(){
    const track = document.querySelector(".carousel-talento-track");
    const cards = track.querySelectorAll(".talento-card");
    const dotsContainer = document.querySelector(".carousel-talento-dots");

    let index = 0;
    let interval;
    const autoSlideDelay = 7000;


    function getVisibleCards(){
        if(window.innerWidth <= 600) return 1;
        if(window.innerWidth <= 900) return 2;
        return 4;
    }

    function updateCarousel(){

        const visible = getVisibleCards();
        const cardWidth = cards[0].offsetWidth;

        track.style.transform = `translateX(-${index * cardWidth}px)`;

        document.querySelectorAll(".carousel-talento-dots span").forEach((dot,i)=>{
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
        interval = setInterval(autoSlide, autoSlideDelay);
    }

    createDots();
    updateCarousel();

    interval = setInterval(autoSlide, autoSlideDelay);

    window.addEventListener("resize", ()=>{
        createDots();
        updateCarousel();
    });

});
