document.addEventListener("DOMContentLoaded", () => {
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbarCollapse = document.getElementById("navbarNavDropdown");
    navbarToggler?.addEventListener("click", () => {
        const expanded = navbarToggler.getAttribute("aria-expanded") === "true";
        navbarToggler.setAttribute("aria-expanded", String(!expanded));
        navbarCollapse?.classList.toggle("show", !expanded);
    });

    document.querySelectorAll(".nav-item.dropdown > .dropdown-toggle").forEach((toggle) => {
        toggle.addEventListener("click", (event) => {
            event.preventDefault();
            const parent = toggle.closest(".dropdown");
            const isOpen = parent?.classList.toggle("show") ?? false;
            toggle.setAttribute("aria-expanded", String(isOpen));
            parent?.querySelector(":scope > .dropdown-menu")?.classList.toggle("show", isOpen);
        });
    });

    document.querySelectorAll(".dropdown-submenu > .dropdown-toggle").forEach((toggle) => {
        toggle.addEventListener("click", () => {
            const parent = toggle.closest(".dropdown-submenu");
            const isOpen = parent?.classList.toggle("open") ?? false;
            toggle.setAttribute("aria-expanded", String(isOpen));
        });
    });

    const heroCarousel = document.getElementById("heroCarousel");
    const heroSlides = Array.from(heroCarousel?.querySelectorAll(".carousel-item") || []);
    const heroIndicators = Array.from(heroCarousel?.querySelectorAll(".carousel-indicators button") || []);
    const heroVideos = Array.from(document.querySelectorAll(".hero-slide video[data-video-src]"));
    let heroMediaEnabled = false;
    let activeSlide = Math.max(0, heroSlides.findIndex((slide) => slide.classList.contains("active")));
    let carouselTimer = null;

    function loadAndPlay(video) {
        if (!video) return;
        if (!video.src) {
            video.src = video.dataset.videoSrc;
            video.load();
        }
        video.play().catch(() => {});
    }

    function startCarouselTimer() {
        if (carouselTimer || heroSlides.length <= 1) return;
        carouselTimer = window.setInterval(() => showSlide(activeSlide + 1), 3500);
    }

    function enableHeroMedia() {
        if (heroMediaEnabled) return;
        heroMediaEnabled = true;
        loadAndPlay(document.querySelector(".carousel-item.active video[data-video-src]"));
    }

    ["pointerdown", "keydown", "touchstart"].forEach((eventName) => {
        window.addEventListener(eventName, enableHeroMedia, { once: true, passive: true });
    });

    function showSlide(index) {
        if (!heroSlides.length) return;
        activeSlide = (index + heroSlides.length) % heroSlides.length;
        heroVideos.forEach((video) => video.pause());
        heroSlides.forEach((slide, slideIndex) => slide.classList.toggle("active", slideIndex === activeSlide));
        heroIndicators.forEach((indicator, indicatorIndex) => {
            const isActive = indicatorIndex === activeSlide;
            indicator.classList.toggle("active", isActive);
            if (isActive) indicator.setAttribute("aria-current", "true");
            else indicator.removeAttribute("aria-current");
        });
        if (heroMediaEnabled) {
            loadAndPlay(heroSlides[activeSlide].querySelector("video[data-video-src]"));
        }
    }

    startCarouselTimer();

    heroIndicators.forEach((indicator, indicatorIndex) => {
        indicator.addEventListener("click", () => {
            showSlide(indicatorIndex);
            if (carouselTimer) {
                window.clearInterval(carouselTimer);
                carouselTimer = null;
                startCarouselTimer();
            }
        });
    });

    document.querySelectorAll(".lite-video").forEach((button) => {
        button.addEventListener("click", () => {
            const videoId = button.dataset.videoId;
            const title = button.dataset.videoTitle || "Video de Vásquez Kennedy";
            const iframe = document.createElement("iframe");
            iframe.src = `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1&rel=0`;
            iframe.title = title;
            iframe.loading = "lazy";
            iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share";
            iframe.allowFullscreen = true;
            button.replaceWith(iframe);
        }, { once: true });
    });
});
