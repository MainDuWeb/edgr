<?php get_header(); ?>



<main class=""> 

    <!-- Notre école -->
        <section class="espaceur-section-presentation "> 
            <img 
                class="w-full rounded-2xl max-h-[600px]"
                src="<?php echo get_template_directory_uri(); ?>/img/ecole.webp" 
                alt="Logo de l'école">

            <h1 class =" titre-présentation pb-1 pt-4 md:pt-8 text-vert-olive "> Notre école</h1>
            <p class=" "> L’école communale de Grand-Rechain est une école accueillante située dans un petit 
                village sur le plateau de Herve, dans un environnement rural, 
                à proximité de Herve et de Verviers.
            </p>

        </section>

        <!-- Le style de l'équipe -->
        <section class="espaceur-section-presentation "> 

            <div class=" md:grid md:grid-cols-2 gap-4">

                <div class=" ">
                    <p>Une équipe éducative <br> <span class="titre-présentation pb-1 text-rose-rouge  ">dynamique</span> </p>
                    
                    <p class="  pb-8">Nos enseignants 
                        <span class="accentue "> sont motivés, à l’écoute </span>  et en perpétuelle formation. 
                        La pédagogie pratiquée place l’enfant au centre, dans le respect de
                        <span class="accentue "> son rythme  </span> 
                        <span class="accentue "> et de ses compétences. </span> 
                    </p>

                </div>
                
                <div class="md:pt-48">
                    <p>Une approche <br> <span class=" titre-présentation pb-1 text-bleu-turquoise ">bienveillante</span> </p>

                    <p class=" pb-4">Les enseignants se concentrent sur les processus visant à stimuler 
                        <span class="accentue-bleu-turquoise "> son rythme  </span> 
                        <span class="accentue-bleu-turquoise ">les interactions,  </span> la 
                        <span class="accentue-bleu-turquoise ">coopération  </span> et le travail en 
                        <span class="accentue-bleu-turquoise "> autonomie.  </span> 
                        Ces compétences sont travaillées dans chaque activité proposée à l’aide de projets significatifs.</p>
                </div>
                    
            </div>

            <p class=" text-sm pb-2 md:max-w-80">Vous pourrez en apprendre plus sur notre école et notre pédagogie en téléchargeant notre ROI </p>

            <div> 

                <a 
                
                    href="<?php echo esc_url(get_permalink(get_page_by_path('documents'))); ?>"
                    class="btn btn-bleu group">
                
                    Documents

                    <span class=" item-bleu-1 origin-left"></span>

                    <span class=" item-bleu-2 origin-left"></span>
                
                    <span class=" item-bleu-3 origin-left"></span>
                
                    <span class=" item-bleu-4 ">
                        Documents
                    </span>

                </a>
            </div>

        </section>

<!-- Dans notre école -->
<section class="bg-noir bg-cover bg-no-repeat rounded-2xl py-12 mb-12 text-small espaceur-section-presentation">
    <div class="md:px-16 font-semibold text-noir">
        <div class="">
            <div class="flex justify-around espaceur-disciplines">
                <p class="animate-pulse-1 md:text-8xl font-bold pt-1">Art</p>
                <p class="animate-pulse-2 md:text-3xl">Environnement</p>
            </div>


            <div class="flex justify-around espaceur-disciplines">
                <p class="animate-pulse-4 md:text-3xl">Intelligence Multiples</p>
                            <p class="animate-pulse-3 md:text-5xl espaceur-disciplines pt-1">Créativité</p>
            </div>
            <div class="text-blanc-bg text-center py-4">
                <p class="md:text-3xl">Dans notre école <br>il y a une place pour toutes les disciplines et intelligences</p>
            </div>
            <p class="animate-pulse-5 md:text-6xl pt-2">Musique</p>
            <div class="flex justify-around espaceur-disciplines">
                <p class="animate-pulse-6 md:text-2xl">Eveil de l'enfant</p>
                <p class="animate-pulse-7 md:text-6xl mt-1">Découverte</p>
            </div>
            <div class="flex justify-around espaceur-disciplines">
                <p class="animate-pulse-8 md:text-3xl">Développement durable</p>
            </div>
            <p class="animate-pulse-9 md:text-xl ml-8">Expériences</p>
        </div>
    </div>
</section>


        <!-- essayer, se tromper, Recommencer -->
        <section class="espaceur-section-presentation md:my-32"> 

            <div class="bg-kids-school bg-no-repeat bg-cover w-full rounded-2xl  mb-4 h-36 md:mb-8 md:h-72  xl:h-96  reglage-bg  ">
                <div class="lg:h-48"></div>
            </div>

            <div class="md:flex divide-x divide-rose-rouge">
                <div class="bg-quote bg-contain bg-no-repeat">
                    <ul class=" uppercase font-semibold mr-1 md:mr-4 md:font-semibold md:text-3xl md:pl-12  mb-8  ">
                        <li class=" mb-1 md:mb-2">Essayer</li>
                        <li class=" mb-1 md:mb-2">Se tromper</li>
                        <li class=" mb-1 md:mb-2">Recommencer</li>
                        <li>Persévérer</li>
                    </ul>
                </div>

                <p class=" block  pl-1  md:pl-4 ">
                    Chez nous, 
                    <span class="accentue ">on croit en nos élèves, </span> en leurs talents et, jour après jour,  notre objectif est de continuer à les faire 
                    <span class="accentue ">grandir </span>  et 
                    <span class="accentue ">s’épanouir. </span> 
                </p>


            </div>

        </section>

        <!-- Nous proposons à votre enfant -->
        <section class=" md:mx-4 titre-activite espaceur-section-presentation "> 
            
            <h4 class=" titre-activite font-medium mb-2 md:mb-12 ">Nous proposons à votre enfant </h4>
        
            <div class="md:grid md:grid-cols-3 gap-24">

                <!-- Les images  -->
                <div class="hidden md:block "> 

                    <img
                        class= ""
                        src=" <?php echo get_template_directory_uri(); ?>/img/enfant_2.webp"
                        alt="">
                    
                    <img
                        class= "rotate-12"
                        src=" <?php echo get_template_directory_uri(); ?>/img/enfant_1.webp"
                        alt="">
            
                </div>

                <!-- Les infos -->
                <ul class="col-span-2">

                    <!-- Module d'éveil aux langues -->
                    <li class=" espaceur-item-activite">

                            <svg class=" custom-svg-presentation " viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                                stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            
                            <div class=" pl-2">
                                <p>Module d’éveil aux langues. </p>
                                <p class=" texte-small-secondary">À partir de la maternelle</p>
                            </div>

                    </li>

                    <!-- Néerlandais pour tous -->
                    <li class=" espaceur-item-activite">
                        
                        <svg class=" custom-svg-presentation" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                            stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div class="pl-2 ">
                            <p>Néerlandais pour tous! </p>
                            <p class=" texte-small-secondary">À partir de la 3e maternelle</p>
                        <div>

                    </li>

                    <!-- Activités culturelles -->
                    <li class=" espaceur-item-activite">
                            <svg class="custom-svg-presentation" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                                stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        <div>
                            <p class="pl-2  ">Activités culturelles </p>
                            <p class=" texte-small-secondary">(théâtre, expositions, concerts…).</p>
                        </div>
                    </li>

                    <!-- Cours de piscine -->
                    <li class=" espaceur-item-activite">

                        <svg class="custom-svg-presentation" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                                stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class='pl-2  '>Cours de piscine </p>
                    </li>

                    <!-- Bibliothèque de Grand-Rechain -->
                    <li class=" espaceur-item-activite">

                            <svg class="custom-svg-presentation" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                                stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="underline ml-2">
                        
                                <a 
                                target="_blanck"
                                href="<?= carbon_get_theme_option('bibliotheque'); ?>">La bibliothèque
                                </a> 
                            
                            </div>
                            
                
                    </li>

                    <!-- Activité extra scolaire  -->
                    <li class=" espaceur-item-activite">
                        <svg class=" custom-svg-presentation " viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                            stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div class="underline ml-2">
                            
                            <a 
                                href="http://ecoledegrandrechain.be/activite_extra_scola/">Activité extra-scolaire </a>
                            </a>

                        </div>
                        
                    </li>

                </ul>

            </div>
        
        </section>

        <!-- Quelques chiffres -->
        <section class=" mb-12 md:mb-48 font-semibold pt-4 md:pt-8 bg-[#F5E4EB] rounded-md -rotate-2 "> 

            <div class="rotate-2">
                <header> 
                    <h4 class="mb-4  md:pl-48 titre-activite md:py-8"> Quelques chiffres </h4> 
                </header>
            
                <div class="flex md:justify-center md:pb-4">

                    <ul class="">

                        <li class="flex">
                        <div class=" nombre-eleve text-rose-vieux  ">
                            <?= carbon_get_theme_option('maternelle'); ?>
                        </div>
                        <div class="pl-2 md:pt-10">
                            <p class=" text-sm md:text-2xl pt-2 font-medium ">Classes</p>
                            <p class=" text-xl md:text-3xl ">Maternelle</p>
                        </div>
                        </li>

                        <li class="flex">
                        <div class=" nombre-eleve text-vert-olive  "> 
                            <?= carbon_get_theme_option('primaire'); ?>
                        </div>
                        <div class="pl-2 md:pt-10">
                            <p class=" text-sm md:text-2xl pt-2 font-medium">Classes</p>
                            <p class=" text-xl  md:text-3xl">Primaire</p>
                        </div>
                        </li>

                        <li class="flex">
                        
                        <div class=" nombre-eleve text-bleu-turquoise "> 
                        <?= carbon_get_theme_option('inclusif'); ?>
                        </div>
                        <div class="pl-2 md:pt-10">
                            <p class=" text-sm md:text-2xl pt-2 font-medium">Classe</p>
                            <p class=" text-xl  md:text-3xl">Inclusive</p>
                        </div>
                        </li>

                    </ul>

                    <!-- total -->
                    <div class =" text-sm pl-8 md:pl-24 pt-32">

                    <p > 
                        <strong class="text-12xl text-rose-rouge leading-3 font-bold text-6xl md:text-9xl ">
                        <?= carbon_get_theme_option('total'); ?>
                        </strong>
                        <span class="font-medium md:text-lg"> élèves inscrits</span> 
                    </p>

                    
                        
                                                                                            

                    </div>
                
                </div>
            </div>
            
        </section>

        <!-- Partenariat et collaboration -->
        <section class="  mb-4 titre-activite titre-activite   md:mb-36  "> 
            <h4 class=" titre-activite font-medium mb-2 md:mb-12"> Partenariat et collaboration </h4>

            <div class="md:grid md:grid-cols-3 gap-24">

                            
                <!-- Les images  -->
                <div class="hidden md:block "> 

                    <img
                        class= ""
                        src=" <?php echo get_template_directory_uri(); ?>/img/comm_1.webp"
                        alt="">
                    
                    <img
                        class= "rotate-12"
                        src=" <?php echo get_template_directory_uri(); ?>/img/comm_2.webp"
                        alt="">
            
                </div>

                <!-- Les infos -->
                <ul class="mb-8 md:pt-32 col-span-2">

                        <li class=" espaceur-item-activite">

                                <svg class=" custom-svg-presentation " viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                                    stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            
                            <div class="pl-2 ">
                                <p> PSE  
                                    <span class="texte-small-secondary">(Promotion de la santé à l'école) 
                                    </span>
                                </p>
                            </div>
                                
                        </li>

                        <li class=" espaceur-item-activite">

                                <svg class=" custom-svg-presentation " viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                                    stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            <div class="pl-2 ">
                                <p> Pôle territorial  <span class="texte-small-secondary"> Maurise Heuse</span>
                                </p>
                            </div>
                    
                        </li>

                        <li class=" espaceur-item-activite">

                                <svg class=" custom-svg-presentation " viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                                    stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            <div class="pl-2 min-w-64 ">
                                <p> Les classes d'eau  </p>
                            </div>

                        </li>

                        <li class=" espaceur-item-activite">

                                <svg class=" custom-svg-presentation " viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33 16.62V18C32.9982 21.2347 31.9508 24.3821 30.014 26.9728C28.0773 29.5635 25.3549 31.4588 22.253 32.3759C19.1511 33.293 15.8359 33.1829 12.8017 32.0619C9.76752 30.9409 7.17698 28.8692 5.41644 26.1556C3.6559 23.4421 2.81969 20.2321 3.03252 17.0045C3.24534 13.7769 4.49581 10.7045 6.59742 8.24565C8.69903 5.78677 11.5392 4.07311 14.6943 3.36026C17.8494 2.64741 21.1504 2.97355 24.105 4.29004" 
                                    stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.5 16.5L18 21L33 6" stroke="#C2236B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            <div class="pl-2 ">
                                <p> L'apper  <span class="texte-small-secondary"> (sécurité routière)</span>
                                </p>
                            </div>

                        </li>

                </ul>

            </div>

        </section>

        <!-- PMS et réveil scolaire -->
        <section class="mb-4  "> 
            
            <div class="mb-8 md:mb-16 ">

                <h4 class=" titre-présentation pb-1"> Le PMS
                    <span class=" text-sm font-normal">  (centre psycho-médico-social) </span>
                </h4>
                    <p class="  md:pr-96">
                        Incarné par <span class=" font-medium " ><?= carbon_get_theme_option('nom_pms_1'); ?> et <?= carbon_get_theme_option('nom_pms_2'); ?> </span>  elles proposent aux enfants et aux adolescents un suivi sur les plans psychologique, 
                        médical et social tout au long de leur scolarité.  Mme <span class=" font-medium " ><?= carbon_get_theme_option('nom_pms_1'); ?> </span>  est présente à l’école le lundi (matin ou après-midi) 
                        une semaine sur deux
                    </p>
            </div>  

        



            <div class="md:grid grid-cols-3 w-full">

                    <div class="col-span-1"> 
                        <img 
                        class="  mx-auto"
                        src="<?php echo get_template_directory_uri(); ?>/img/logo_rs.webp" 
                        alt="Logo du réveil scolaire école"
                        >
                    </div>

                    <div class="col-span-2">

                        <h4 class="titre-présentation md:mb-4"> 
                            Le Réveil Scolaire
                        </h4>

                        <p class=" md:mb-4">
                            L’école est soutenue par l'association <span class="accentue">"Le Réveil Scolaire"</span> , composée de parents d'élèves et de membres de l’équipe pédagogique de l'école, son objectif est de fournir aux enfants des outils pédagogiques et des activités scolaires et extra-scolaires pour favoriser leur épanouissement. 
                        </p>

                        <p class=" ">
                        Les membres se réunissent deux fois par an pour planifier des activités de collecte de fonds, qui permettent aussi de renforcer les liens entre parents, enfants et enseignants en dehors du cadre scolaire.
                        </p>
                    </div>
            </div>
            

        </section>

</main>
<?php get_footer(); ?>
