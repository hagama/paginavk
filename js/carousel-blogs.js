/* =========================
   BLOGS SLIDER
========================= */

const blogsTrack = document.querySelector(".blogs-track");
const blogCards = document.querySelectorAll(".blog-card");
const blogsDotsContainer = document.querySelector(".blogs-dots");

let blogsPerView = window.innerWidth <= 1024 ? 1 : 2;
let currentBlogIndex = 0;

/* CREAR DOTS */
function createBlogDots() {

    blogsDotsContainer.innerHTML = "";

    blogsPerView = window.innerWidth <= 1024 ? 1 : 2;

    const totalDots = Math.ceil(blogCards.length / blogsPerView);

    for (let i = 0; i < totalDots; i++) {

        const dot = document.createElement("div");

        dot.classList.add("blog-dot");

        if (i === 0) {
            dot.classList.add("active");
        }

        dot.addEventListener("click", () => {
            currentBlogIndex = i;
            updateBlogsSlider();
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

/* RESIZE */
window.addEventListener("resize", () => {

    blogsPerView = window.innerWidth <= 1024 ? 1 : 2;

    currentBlogIndex = 0;

    createBlogDots();

    updateBlogsSlider();

});

/* INIT */
createBlogDots();
updateBlogsSlider();