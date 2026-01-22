import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot-indicator');
    let currentSlide = 0;
    const totalSlides = slides.length;
    let slideInterval;

    function showSlide(index) {
        // Handle wrap around
        if (index >= totalSlides) index = 0;
        if (index < 0) index = totalSlides - 1;

        currentSlide = index;

        // Hide all slides
        slides.forEach((slide) => {
            slide.classList.remove('opacity-100', 'z-10', 'pointer-events-auto');
            slide.classList.add('opacity-0', 'z-0', 'pointer-events-none');
        });

        // Show current slide
        slides[currentSlide].classList.remove('opacity-0', 'z-0', 'pointer-events-none');
        slides[currentSlide].classList.add('opacity-100', 'z-10', 'pointer-events-auto');

        // Update dots
        dots.forEach((dot, idx) => {
            if (idx === currentSlide) {
                dot.classList.remove('border-2', 'border-white', 'bg-transparent');
                dot.classList.add('bg-white');
            } else {
                dot.classList.add('border-2', 'border-white', 'bg-transparent');
                dot.classList.remove('bg-white');
            }
        });
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    // Auto Play
    function startSlideTimer() {
        slideInterval = setInterval(nextSlide, 5000); // 5 seconds
    }

    function resetSlideTimer() {
        clearInterval(slideInterval);
        startSlideTimer();
    }

    // Event Listeners for Dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            resetSlideTimer();
        });
    });

    // Initialize
    if (slides.length > 0) {
        showSlide(0);
        startSlideTimer();
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobileMenuBtn');
    const menu = document.getElementById('mobileMenu');
    const close = document.getElementById('mobileMenuClose');
    const backdrop = document.getElementById('mobileMenuBackdrop');

    if (!btn || !menu || !close || !backdrop) return;

    const openMenu = () => {
        menu.classList.remove('hidden');
        btn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    };

    const closeMenu = () => {
        menu.classList.add('hidden');
        btn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    };

    btn.addEventListener('click', openMenu);
    close.addEventListener('click', closeMenu);
    backdrop.addEventListener('click', closeMenu);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMenu();
    });
});
