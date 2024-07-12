<?php get_header(); ?>

<style>
.modal-container {
   visibility: hidden;
   transition: visibility 0.4s;
}
.modal-container.active {
   visibility: visible;
}
.overlay {
   transition: opacity 0.4s 0.2s ease-out;
}
.modal-container.active .overlay {
   opacity: 1;
   transition: opacity 0.4s ease-out;
}
.modal {
   opacity: 0;
   width: 100%;
   max-width: 500px;
   min-width: 300px;
   padding: 30px;
   border-radius: 5px;
   position: absolute;
   z-index: 100;
   top: 50%;
   left: 50%;
   transform: translate(-50%, calc(-50% - 50px));
   transition: opacity 0.4s ease-out, transform 0.4s ease-out;
}
.modal-container.active .modal {
   opacity: 1;
   transform: translate(-50%, -50%);
   transition: opacity 0.4s 0.2s ease-out, transform 0.4s 0.2s ease-out;
}
.close-modal {
   padding: 10px;
   border: none;
   border-radius: 5px;
   font-size: 18px;
   position: absolute;
   top: 10px;
   right: 10px;
   cursor: pointer;
   background: #ff365e;
   color: #fff;
}
</style>



<div class="modal-container top-0 fixed w-screen h-screen">
   <div class="overlay opacity-0 w-screen h-screen bg-[#0c4469c6] modal-trigger"></div>
   <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="dialogDesc">
      <button aria-label="close modal" class="close-modal modal-trigger block ">X</button>
     
      <div class="slide flex items-center gap-4 duration-500 text-blanc-bg mt-12">
         <?php 
         $query = new WP_Query(array('post_type' => 'infrastructure', 'posts_per_page' => 99)); 
         if( $query->have_posts() ) : 
            while( $query->have_posts() ) : $query->the_post(); 
         ?> 
         <div class="slider-item flex-none w-full">
            <div class="titre-section mb-2"><?php the_title(); ?></div>
            <div class="texte-primary mb-2 "><?php the_content(); ?></div>
            <div class="relative rounded-xl">
               <?php 
               if( has_post_thumbnail() ) {
                  the_post_thumbnail('infrastructure', ['class' => 'rounded-xl h-96 min-w-64 md:min-w-2xl w-full' ]); 
               } 
               ?>
            </div>
         </div>
         <?php 
            endwhile; 
            wp_reset_postdata(); 
         endif; 
         ?>
      </div>

      <div class="mt-8 flex gap-4 justify-center">
         <button id="prev" class="bg-rose-rouge text-blanc-bg p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-skip-back"><polygon points="19 20 9 12 19 4 19 20"/><line x1="5" x2="5" y1="19" y2="5"/></svg>
         </button>
         <button id="next" class="bg-rose-rouge text-blanc-bg p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-skip-forward"><polygon points="5 4 15 12 5 20 5 4"/><line x1="19" x2="19" y1="5" y2="19"/></svg>
         </button>
      </div>
      
   </div>
</div>

<main class="">

   <section class="w-full mx-auto">
      <h1 class="text-3xl font-semibold md:text-4xl mb-8">Projetez-vous dans l'école de votre enfant!</h1>
         <button class="btn-sm-bleu block modal-trigger">Voir les images</button>

         
      <div class="overflow-hidden"></div>
   </section>
   <h3 class="text-3xl font-semibold mt-12 mb-8 ">Ou prennez de la hauteur</h3>
   <iframe class="w-full h-96 rounded-xl mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.008587156367!2d5.811325076596805!3d50.60837797162275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c08b65951ba647%3A0x26590e41757a3a1b!2sAv.%20des%20Platanes%2063%2C%204650%20Herve!5e0!3m2!1sfr!2sbe!4v1718384887339!5m2!1sfr!2sbe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</main>

<script>

    document.addEventListener('DOMContentLoaded', () => {
    // Modal
    const modalContainer = document.querySelector(".modal-container");
    const modalTriggers = document.querySelectorAll(".modal-trigger");
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const slide = document.querySelector('.slide');
    const items = document.querySelectorAll('.slider-item');

    modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal));

    function toggleModal() {
        modalContainer.classList.toggle("active");
    }

    let currentIndex = 0;

    function updateSliderPosition() {
        const slideWidth = items[0].clientWidth;
        slide.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
        updateSliderPosition();
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
        updateSliderPosition();
    });

    window.addEventListener('resize', updateSliderPosition);

    // Initial button state
    updateSliderPosition();
    });

</script>

<?php get_footer(); ?>
