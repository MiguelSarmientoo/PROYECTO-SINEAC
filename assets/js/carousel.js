document.addEventListener('DOMContentLoaded', (event) => {
  let slideIndex = 0;
  let slides = document.getElementsByClassName("carousel-item");

  function showSlides(n) {
      slides[slideIndex].classList.remove('active');

      // Calculate the next slide index
      let nextSlideIndex = (n + slides.length) % slides.length;

      // Add the active and next/prev classes to the slides for sliding effect
      slides[slideIndex].classList.add(n > 0 ? 'prev' : 'next');
      slides[nextSlideIndex].classList.add('active');
      slides[nextSlideIndex].classList.add(n > 0 ? 'next' : 'prev');

      // Reset the classes after the transition ends
      setTimeout(() => {
          slides[slideIndex].classList.remove('prev', 'next');
          slides[nextSlideIndex].classList.remove('prev', 'next');
      }, 1000); // Adjust this timeout according to your transition duration

      // Update the slideIndex
      slideIndex = nextSlideIndex;
  }

  function plusSlides(n) {
      showSlides(slideIndex + n);
  }

  setInterval(() => plusSlides(1), 5000); // Cambia de slide cada 5 segundos

  document.querySelector('.prev').addEventListener('click', () => plusSlides(-1));
  document.querySelector('.next').addEventListener('click', () => plusSlides(1));
});
