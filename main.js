
class Collapse {
    constructor(trigger, target) {
        this.trigger = document.getElementById(trigger);
        this.target = document.getElementById(target);

        this.trigger.addEventListener('click', () => this.toggle());
    }

    toggle() {
        if (this.target.classList.contains('collapsed')) {
            this.target.classList.remove('collapsed');
            this.target.classList.add('expanded');
        } else {
            this.target.classList.remove('expanded');
            this.target.classList.add('collapsed');
        }
    }
}

// document.addEventListener('DOMContentLoaded', (event) => {
//     const prevButton = document.getElementById('prev');
//     const nextButton = document.getElementById('next');
//     const slide = document.querySelector('.slide');
//     const items = document.querySelectorAll('.slider-item');

//     let currentIndex = 0;

//     function updateSliderPosition() {
//         const slideWidth = items[0].clientWidth;
//         slide.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
//     }

//     prevButton.addEventListener('click', () => {
//         currentIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
//         updateSliderPosition();
//     });

//     nextButton.addEventListener('click', () => {
//         currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
//         updateSliderPosition();
//     });

//     window.addEventListener('resize', updateSliderPosition);

//     // Initial button state
//     updateSliderPosition();
// });

// document.addEventListener('DOMContentLoaded', () => {
//     const prevButton = document.getElementById('prev');
//     const nextButton = document.getElementById('next');
//     const slide = document.querySelector('.slide');
//     const items = document.querySelectorAll('.slider-item');
//     const imageModal = document.getElementById('imageModal');
//     const modalImage = document.getElementById('modalImage');
//     const modalCaption = document.getElementById('modalCaption');
//     const closeModal = document.getElementById('closeModal');

//     let currentIndex = 0;

//     function updateSliderPosition() {
//         const slideWidth = items[0].clientWidth;
//         slide.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
//     }

//     function openModal(imageUrl, caption) {
//         modalImage.src = imageUrl;
//         modalImage.alt = caption;
//         modalCaption.textContent = caption;
//         imageModal.classList.remove('hidden');
//     }

//     function closeModalHandler() {
//         imageModal.classList.add('hidden');
//     }

//     prevButton.addEventListener('click', () => {
//         currentIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
//         updateSliderPosition();
//     });

//     nextButton.addEventListener('click', () => {
//         currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
//         updateSliderPosition();
//     });

//     slide.addEventListener('click', (event) => {
//         if (event.target.classList.contains('image-link')) {
//             event.preventDefault();
//             const imageUrl = event.target.getAttribute('data-image');
//             const caption = event.target.getAttribute('data-caption');
//             openModal(imageUrl, caption);
//         }
//     });

//     closeModal.addEventListener('click', closeModalHandler);
//     window.addEventListener('click', (event) => {
//         if (event.target === imageModal) {
//             closeModalHandler();
//         }
//     });

//     window.addEventListener('resize', updateSliderPosition);

//     // Initial button state
//     updateSliderPosition();
// });

