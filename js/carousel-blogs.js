/* =========================
   BLOGS SLIDER
========================= */

const blogsTrack = document.querySelector(".blogs-track");
const blogCards = document.querySelectorAll(".blog-card");
const blogsDotsContainer = document.querySelector(".blogs-dots");

let blogsPerView = window.innerWidth <= 1024 ? 1 : 2;
let currentBlogIndex = 0;
let totalBlogSlides = 0;
let blogsAutoSlide;

/* CREAR DOTS */
function createBlogDots() {

    blogsDotsContainer.innerHTML = "";

    blogsPerView = window.innerWidth <= 1024 ? 1 : 2;

    totalBlogSlides = Math.ceil(blogCards.length / blogsPerView);

    for (let i = 0; i < totalBlogSlides; i++) {

        const dot = document.createElement("div");

        dot.classList.add("blog-dot");

        if (i === 0) {
            dot.classList.add("active");
        }

        dot.addEventListener("click", () => {
            currentBlogIndex = i;
            updateBlogsSlider();
            restartBlogsAutoSlide();
        });

        blogsDotsContainer.appendChild(dot);
    }
}

/* UPDATE */
function updateBlogsSlider() {

    const cardWidth = blogCards[0].offsetWidth + 30;

    blogsTrack.style.transform =
        `translateX(-${currentBlogIndex * cardWidth}px)`;

    document.querySelectorAll(".blog-dot").forEach((dot, index) => {

        dot.classList.toggle(
            "active",
            index === currentBlogIndex
        );

    });

}

function startBlogsAutoSlide() {
    blogsAutoSlide = setInterval(() => {
        currentBlogIndex++;
        if (currentBlogIndex >= totalBlogSlides) {
            currentBlogIndex = 0;
        }
        updateBlogsSlider();
    }, 7000);
}

function restartBlogsAutoSlide() {
    clearInterval(blogsAutoSlide);
    startBlogsAutoSlide();
}

/* RESIZE */
window.addEventListener("resize", () => {

    blogsPerView = window.innerWidth <= 1024 ? 1 : 2;

    currentBlogIndex = 0;

    createBlogDots();

    updateBlogsSlider();
    restartBlogsAutoSlide();

});

/* INIT */
createBlogDots();
updateBlogsSlider();
startBlogsAutoSlide();
