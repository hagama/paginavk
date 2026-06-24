const galleryItems = document.querySelectorAll('.gallery-item');
const carousel = document.querySelector('#carouselExample');

galleryItems.forEach(item => {
    item.addEventListener('click', () => {
        const index = item.getAttribute('data-index');

        const bsCarousel = bootstrap.Carousel.getOrCreateInstance(carousel);

        bsCarousel.to(index);
    });
});