<footer class=" mt-16 md:mt-32 bg-nav text-text-nav shadow-lg ">
    
    <div class=" mx-auto text-center ">

    <div class="flex  justify-around gap-8 py-8 ">


        <div class="pt-4">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_ecole.webp" alt="logo">
        </div>

        <div class=" ">
                <!-- Première colonne -->
                <ul>
                    <li class="pb-2"><div class="text-xl font-semibold">Madame Allelyn (Direction)</div></li>
                    <li class="pb-2"><a class="underline" href="tel:<?php echo esc_attr(carbon_get_theme_option('tel_direction')); ?>"><?php echo esc_html(carbon_get_theme_option('tel_direction')); ?></a></li>
                    <li class="pb-2"><a class="underline" href="mailto:<?php echo esc_attr(carbon_get_theme_option('mail')); ?>"><?php echo esc_html(carbon_get_theme_option('mail')); ?></a></li>
                    <li class="pb-2"><a target="_blanck" class="underline" href="<?php echo esc_html(carbon_get_theme_option('lien_adresse_ecole')); ?>"><?php echo esc_html(carbon_get_theme_option('adresse_ecole')); ?></a></li>
                </ul>
        </div>

        <div class=" pt-4 ">
                    <a href="<?= carbon_get_theme_option('lien_vdh'); ?>"
                        target="_blank">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ville_de_herve.webp" alt="logo">
                    </a>
                    
        </div>
    <?php  ?>
    </div>
        

    <h6 class="w-full bg-[#0e100b] text-center pt-0.5 pb-2">
        
        <a 
            class="flex justify-center hover:blur-xs"
            href="https://www.linkedin.com/in/martin-keita-02384292/">

            Site créé avec 

               <span class="px-2 pt-2"> 

                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.7223 8.62655L12.6985 8.65276L9 12.7622L5.30153 8.65276C5.28835 8.63812 5.27505 8.62359 5.26163 8.60918C3.97763 7.23007 3.5 6.35146 3.5 5.49414C3.5 4.85165 3.73308 4.30007 4.05135 3.94643C4.35868 3.60496 4.69157 3.49414 4.95 3.49414C5.34681 3.49414 5.47436 3.55126 5.53813 3.58212C5.63937 3.63111 5.90528 3.78753 6.39847 4.33552C7.06222 5.07302 8.0078 5.49414 9 5.49414C9.9922 5.49414 10.9378 5.07302 11.6015 4.33552C12.0947 3.78753 12.3606 3.63111 12.4619 3.58212C12.5256 3.55126 12.6532 3.49414 13.05 3.49414C13.3084 3.49414 13.6413 3.60496 13.9486 3.94643C14.2669 4.30007 14.5 4.85165 14.5 5.49414C14.5 6.33764 14.023 7.2104 12.7223 8.62655Z" 
                        stroke="#117F67" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>


               </span> 
               
             par M.Keita

        </a>

    </h6>

</footer>

<?php wp_footer(); ?>
</body>
</html>
