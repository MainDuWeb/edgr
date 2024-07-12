<?php get_header(); ?>

<main class="px-4 sm2:px-8 md:px-32">

    <!-- Garderie du matin  -->
    <section class=" h-full espaceur-garderie">

        <header class=" mb-4 md:mb-12 ">

            <!-- Garderie du matin -->
            <h3 class=" header-garderie "> 
                La garderie du
                
                <div class="inline-block bg-rose-rouge -rotate-2 px-1.5 md:px-2 rounded-sm ">
                    <span class="block rotate-2 text-blanc-bg">matin</span>
                </div>
            </h3>

            <!-- heure et prix -->
            <div class="heure-prix-garderie "> 
                    <span class=" ">7h30 à 8h</span> 
                    <span class=" text-bleu-fonce "> || </span> 
                    <span class="  ">0,25€</span>
                    <span class=" text-bleu-fonce font-light ">/enfant</span>
            </div>
                
        </header>

        <div class="mb-4 md:mb-8">

            <!-- Lieu  -->
            <div class="flex ">
                <svg class="custom-svg" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6663 13.3337C26.6663 21.3337 15.9997 29.3337 15.9997 29.3337C15.9997 29.3337 5.33301 21.3337 5.33301 13.3337C5.33301 10.5047 6.45681 7.79157 8.4572 5.79119C10.4576 3.7908 13.1707 2.66699 15.9997 2.66699C18.8287 2.66699 21.5418 3.7908 23.5421 5.79119C25.5425 7.79157 26.6663 10.5047 26.6663 13.3337Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 17.333C18.2091 17.333 20 15.5421 20 13.333C20 11.1239 18.2091 9.33301 16 9.33301C13.7909 9.33301 12 11.1239 12 13.333C12 15.5421 13.7909 17.333 16 17.333Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <h4>
                    <address class=" adresse-garderie "> 
                        <div> 
                            <a 
                                target="_blanck" 
                                class="underline" 
                                href="<?php echo esc_html(carbon_get_theme_option('lien_adresse_ecole')); ?>">
                                    <span 
                                        class="font-semibold "> 
                                        Hall Omnisports ||
                                    </span>
                            Avenue des Platanes, 63 4650 Grand-Rechain
                            </a>
                        </div>
                    <address>
                </h4>
            </div>
        
            <!-- madame xxxxx -->
            <div class="flex md:mb-8">

                <svg class="custom-svg" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.3337 28V25.3333C25.3337 23.9188 24.7718 22.5623 23.7716 21.5621C22.7714 20.5619 21.4148 20 20.0003 20H12.0003C10.5858 20 9.22928 20.5619 8.22909 21.5621C7.2289 22.5623 6.66699 23.9188 6.66699 25.3333V28" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.0003 14.6667C18.9458 14.6667 21.3337 12.2789 21.3337 9.33333C21.3337 6.38781 18.9458 4 16.0003 4C13.0548 4 10.667 6.38781 10.667 9.33333C10.667 12.2789 13.0548 14.6667 16.0003 14.6667Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <div class="md:text-2xl mb-6 md:mb-2">
                    <?= carbon_get_theme_option('garderie_matin'); ?> 
                </div>

            </div>

            <!-- Petit texte-->

            <div>
                <p class=" md:text-xl pb-2"> Quelques jeux seront mis à disposition des enfants afin qu’ils puissent s’occuper avant de commencer l’école. </p>
            </div>

        </div>


        
    </section>

    <!-- Garderie du mercredi après-midi  -->
    <section class=" h-full espaceur-garderie">

        <header class=" mb-4 md:mb-12 ">

            <!-- Garderie du mercredi après-midi  -->
            <h3 class=" header-garderie  "> 
                La garderie du
                
                <div class="inline-block bg-rose-rouge -rotate-1 px-1.5 md:px-2 rounded-sm">
                    <span class="block rotate-1 text-blanc-bg"> mercredi après-midi</span>
                </div>
            </h3>

            <!-- heure et prix -->
            <div class="heure-prix-garderie"> 
                    <span class=" ">13h à 17h </span> 
                    <span class=" text-bleu-fonce "> || </span> 
                    <span class="  ">4€</span>
                    <span class=" text-bleu-fonce font-light ">/enfant par journée</span>
            </div>
                
        </header>

        <div class="mb-4 md:mb-8">

            <!-- Lieu  -->
            <div class="flex ">
                <svg class="custom-svg" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6663 13.3337C26.6663 21.3337 15.9997 29.3337 15.9997 29.3337C15.9997 29.3337 5.33301 21.3337 5.33301 13.3337C5.33301 10.5047 6.45681 7.79157 8.4572 5.79119C10.4576 3.7908 13.1707 2.66699 15.9997 2.66699C18.8287 2.66699 21.5418 3.7908 23.5421 5.79119C25.5425 7.79157 26.6663 10.5047 26.6663 13.3337Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 17.333C18.2091 17.333 20 15.5421 20 13.333C20 11.1239 18.2091 9.33301 16 9.33301C13.7909 9.33301 12 11.1239 12 13.333C12 15.5421 13.7909 17.333 16 17.333Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <h4>
                    <address class=" adresse-garderie "> 
                        <div> 
                            <a 
                                target="_blanck" 
                                class="underline" 
                                href="<?php echo esc_html(carbon_get_theme_option('lien_adresse_bruyere')); ?>">
                                    <span 
                                        class="font-semibold "> 
                                        L'école Bruy'ssonnière ||
                                    </span>
                                Rue de la grotte 1 4650 Herve
                            </a>
                        </div>
                    <address>
                </h4>
            </div>
        
            <!-- madame du mercredi  -->
            <div class="flex mb-6 md:mb-4">

                <svg class="custom-svg" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.3337 28V25.3333C25.3337 23.9188 24.7718 22.5623 23.7716 21.5621C22.7714 20.5619 21.4148 20 20.0003 20H12.0003C10.5858 20 9.22928 20.5619 8.22909 21.5621C7.2289 22.5623 6.66699 23.9188 6.66699 25.3333V28" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.0003 14.6667C18.9458 14.6667 21.3337 12.2789 21.3337 9.33333C21.3337 6.38781 18.9458 4 16.0003 4C13.0548 4 10.667 6.38781 10.667 9.33333C10.667 12.2789 13.0548 14.6667 16.0003 14.6667Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <div class="md:text-2xl md:mb-2">
                    <?= carbon_get_theme_option('garderie_mercredi'); ?> 
                </div>

            </div>


            <!-- Petit texte-->

            <div class=" md:text-xl pb-2">
                <p > Une panoplie d’activités sera proposée à votre enfant 
                    (coloriage, bricolage, jeux de ballons, etc...). Un dortoir sera mis à disposition pour y faire la sieste.  </p>
                <p> Cette garderie est mise place en place par 
                    <a  class="accentue"
                        target="_blank"
                        href="<?= carbon_get_theme_option('lien_garderie_mercredi'); ?>">
                    
                            la ville de Herve. 
                    
                    </a> 
            </p>
                     
            </div>

        </div>


            
        
    </section>

    <!-- etude surveillée -->
    <section class=" h-full espaceur-garderie">

        <header class=" mb-4 md:mb-8 ">

            <!--Etude  -->
            <h3 class=" header-garderie  "> 
                Etude 
                
                <div class="inline-block bg-rose-rouge -rotate-1 px-1.5 md:px-2 rounded-sm">
                    <span class="block rotate-1 text-blanc-bg"> surveillée</span>
                </div>
            </h3>

            <!-- heure et prix -->
            <div class="heure-prix-garderie"> 
                    <span class=" ">15h30 à 16h30 </span> 
                    <span class=" text-bleu-fonce "> || </span> 
                    <span class="  ">0,5€</span>
                    <span class=" text-bleu-fonce font-light ">/enfant</span>
            </div>
                
        </header>

        <div class="mb-4 md:mb-8">

            <!-- Lieu  -->
            <div class="flex mb-4 md:mb-8">
                <svg class="custom-svg" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6663 13.3337C26.6663 21.3337 15.9997 29.3337 15.9997 29.3337C15.9997 29.3337 5.33301 21.3337 5.33301 13.3337C5.33301 10.5047 6.45681 7.79157 8.4572 5.79119C10.4576 3.7908 13.1707 2.66699 15.9997 2.66699C18.8287 2.66699 21.5418 3.7908 23.5421 5.79119C25.5425 7.79157 26.6663 10.5047 26.6663 13.3337Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 17.333C18.2091 17.333 20 15.5421 20 13.333C20 11.1239 18.2091 9.33301 16 9.33301C13.7909 9.33301 12 11.1239 12 13.333C12 15.5421 13.7909 17.333 16 17.333Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <h4>
                    <address class=" adresse-garderie "> 
                        <div> 
                            <a 
                                target="_blanck" 
                                class="underline" 
                                href="<?php echo esc_html(carbon_get_theme_option('lien_adresse_ecole')); ?>">
                                    <span 
                                        class="font-semibold "> 
                                        À l'école ||
                                    </span>
                                    Avenue des Platanes, 63 4650 Grand-Rechain
                            </a>
                        </div>
                    <address>
                </h4>
            </div>
        


            <!-- Petit texte-->
            <div class="md:text-xl ">
            <p class="accentue ">Attention</p>
            
                <p class=" pb-2">L’enfant qui quitte l’étude n’a pas nécessairement terminé son travail ! Lorsque vous rentrez à la maison avec votre(vos) enfant(s), vous devez vérifier si le travail est achevé ou pas. </p>
            </div>

        </div>


            
        
    </section>

    <!-- L'après-midi -->
    <section class=" h-full espaceur-garderie">

        <header class=" mb-4 md:mb-12 ">

            <!--Etude  -->
            <h3 class=" header-garderie  "> 
                La garderie de 
                
                <div class="inline-block bg-rose-rouge -rotate-1 px-1.5 md:px-2 rounded-sm">
                    <span class="block rotate-1 text-blanc-bg"> l'après-midi</span>
                </div>
            </h3>

            <!-- heure et prix -->
            <div class="heure-prix-garderie"> 
                    <span class=" ">15h30 à 17h30 </span> 
                    <span class=" text-bleu-fonce "> || </span> 
                    <span class="  ">0,25€</span>
                    <span class=" text-bleu-fonce font-light ">/enfant par demi-heure </span>
            </div>
                
        </header>

        <div class="mb-4 md:mb-8">

            <!-- Lieu  -->
            <div class="flex ">
                <svg class="custom-svg" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6663 13.3337C26.6663 21.3337 15.9997 29.3337 15.9997 29.3337C15.9997 29.3337 5.33301 21.3337 5.33301 13.3337C5.33301 10.5047 6.45681 7.79157 8.4572 5.79119C10.4576 3.7908 13.1707 2.66699 15.9997 2.66699C18.8287 2.66699 21.5418 3.7908 23.5421 5.79119C25.5425 7.79157 26.6663 10.5047 26.6663 13.3337Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 17.333C18.2091 17.333 20 15.5421 20 13.333C20 11.1239 18.2091 9.33301 16 9.33301C13.7909 9.33301 12 11.1239 12 13.333C12 15.5421 13.7909 17.333 16 17.333Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <h4>
                    <address class=" adresse-garderie "> 
                        <div> 
                            <a 
                                target="_blanck" 
                                class="underline" 
                                href="<?php echo esc_html(carbon_get_theme_option('lien_adresse_ecole')); ?>">
                                    <span 
                                        class="font-semibold "> 
                                        À l'école ||
                                    </span>
                                    Avenue des Platanes, 63 4650 Grand-Rechain
                            </a>
                        </div>
                    <address>
                </h4>
            </div>
            
        
            <!-- madame xxxxx -->
            <div class="flex mb-4">

                <svg class="custom-svg" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.3337 28V25.3333C25.3337 23.9188 24.7718 22.5623 23.7716 21.5621C22.7714 20.5619 21.4148 20 20.0003 20H12.0003C10.5858 20 9.22928 20.5619 8.22909 21.5621C7.2289 22.5623 6.66699 23.9188 6.66699 25.3333V28" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.0003 14.6667C18.9458 14.6667 21.3337 12.2789 21.3337 9.33333C21.3337 6.38781 18.9458 4 16.0003 4C13.0548 4 10.667 6.38781 10.667 9.33333C10.667 12.2789 13.0548 14.6667 16.0003 14.6667Z" stroke="#C2236B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <div class="md:text-2xl mb-6 md:mb-2"> 
                     <?= carbon_get_theme_option('garderie_apres_midi'); ?> 
                </div>

            </div>



            <!-- Petit texte-->
            <div class="md:text-xl ">
            
                <p class=" pb-2">Une panoplie d’activités sera proposée à votre enfant (coloriage, bricolage, jeux de ballons, etc...). </p>
            </div>

        </div>


            
        
    </section>


</main>
<?php get_footer(); ?>
