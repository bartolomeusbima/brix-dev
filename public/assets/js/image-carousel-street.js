const track = document.getElementById('carousel-track');
const carousel = document.getElementById('carousel');
const images = [
    'assets/images/photos/street-series/carousel-1.jpg',
    'assets/images/photos/street-series/carousel-2.jpg',
    'assets/images/photos/street-series/carousel-3.jpg',
    'assets/images/photos/street-series/carousel-4.jpg',
    'assets/images/photos/street-series/carousel-5.jpg',
    'assets/images/photos/street-series/carousel-6.jpg'
];

let items = [];
let isSliding = false;
let mobileIndex = 1;
let autoplayTimer;

function renderCarouselItems() {
    track.innerHTML = '';
    const isMobile = window.innerWidth < 800;
    const list = isMobile
    ? [images[images.length - 1], ...images, images[0]]
    : [...images];

    list.forEach((src, i) => {
    const div = document.createElement('div');
    div.className = 'carousel-item';
    div.innerHTML = `
        <div class="img-wrapper">
        <img src="${src}" alt="carousel-img-${i}">
        </div>`;
    track.appendChild(div);
    });

    items = Array.from(track.children);
    if (isMobile) {
    mobileIndex = 1;
    setMobilePosition(false);
    }
}

function setMobilePosition(animate = false) {
    if (window.innerWidth >= 800) return;
    track.style.transition = animate ? 'transform 0.3s ease' : 'none';
    track.style.transform = `translateX(-${mobileIndex * 100}vw)`;
}

function slideRightToLeft() {
    if (isSliding) return;
    isSliding = true;

    if (window.innerWidth < 800) {
    mobileIndex++;
    setMobilePosition(true);
    setTimeout(() => {
        if (mobileIndex === images.length + 1) {
        mobileIndex = 1;
        setMobilePosition(false);
        }
        isSliding = false;
    }, 310);
    } else {
    const clone = items[0].cloneNode(true);
    track.appendChild(clone);
    track.style.transition = 'transform 0.4s ease';
    track.style.transform = `translateX(-${items[0].offsetWidth}px)`;
    setTimeout(() => {
        track.style.transition = 'none';
        track.removeChild(items[0]);
        track.style.transform = 'translateX(0)';
        items = Array.from(track.children);
        isSliding = false;
    }, 400);
    }
}

function slideLeftToRight() {
    if (isSliding) return;
    isSliding = true;

    if (window.innerWidth < 800) {
    mobileIndex--;
    setMobilePosition(true);
    setTimeout(() => {
        if (mobileIndex === 0) {
        mobileIndex = images.length;
        setMobilePosition(false);
        }
        isSliding = false;
    }, 310);
    } else {
    const clone = items[items.length - 1].cloneNode(true);
    track.insertBefore(clone, items[0]);
    track.style.transition = 'none';
    track.style.transform = `translateX(-${items[0].offsetWidth}px)`;
    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
        track.style.transition = 'transform 0.4s ease';
        track.style.transform = 'translateX(0)';
        });
    });
    setTimeout(() => {
        track.removeChild(items[items.length - 1]);
        items = Array.from(track.children);
        isSliding = false;
    }, 400);
    }
}

// Arrows
document.querySelector('.arrow-right').addEventListener('click', slideRightToLeft);
document.querySelector('.arrow-left').addEventListener('click', slideLeftToRight);

// Autoplay
function startAutoplay() {
    clearInterval(autoplayTimer);
    autoplayTimer = setInterval(slideRightToLeft, 2500);
}

// carousel.addEventListener('mouseenter', () => clearInterval(autoplayTimer));
// tambahin kalo abis click button dia berhenti
carousel.addEventListener('mouseleave', startAutoplay);

// Swipe Support for Mobile
let touchStartX = 0;
let touchEndX = 0;

carousel.addEventListener('touchstart', e => {
    touchStartX = e.touches[0].clientX;
});

carousel.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].clientX;
    const swipeDistance = touchEndX - touchStartX;

    if (Math.abs(swipeDistance) > 30) {
    swipeDistance < 0 ? slideRightToLeft() : slideLeftToRight();
    }
});

window.addEventListener('resize', renderCarouselItems);

renderCarouselItems();
startAutoplay();