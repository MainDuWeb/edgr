<?php get_header(); ?>




<main class=" container mx-auto px-4 md:px-16  espaceur-nav "> 

    <div class="mx-4 ">
        <h1 class="text-2xl font-semibold">Nous restons en contact avec vous !</h1>
        <p class=" pb-8"> Découvrez ici nos outils de communication </p>

        <div class="grid md:grid-cols-3 ">
            <!-- Section img -->
            <section class="hidden md:block md:w-3/4  "> 
                <img
                    class= ""
                    src=" <?php echo get_template_directory_uri(); ?>/img/comm_1.webp"
                    alt="">
                
                <img
                    class= "rotate-12"
                    src=" <?php echo get_template_directory_uri(); ?>/img/comm_2.webp"
                    alt="">

                <img
                    class= ""
                    src=" <?php echo get_template_directory_uri(); ?>/img/comm_3.webp"
                    alt="">

                <img
                    class= "rotate-12"
                    src=" <?php echo get_template_directory_uri(); ?>/img/comm_4.webp"
                    alt="">
            </section>

            <!-- Les diffréntes communications  -->
            <section class="col-span-2   ">

                <!-- Notre page actualité -->
                <article class="espaceur-section" >

                    <header class="pb-2">
                        <h3 class="titre-header "> Notre page actualités </h3>
                    </header>
                        
                    <p class="">
                        Rendez-vous sur la page actualités de notre site pour vous tenir au courant de toutes les communications,
                        événements et nouvelles de notre école. 
                    </p>

                    <p class=" mb-4"> 
                        Nous mettons à votre disposition <span class=" accentue ">un agenda Google</span> pré-rempli avec toutes les dates à retenir (bulletins, congés pédagogiques, photos, etc.). 
                    </p>



                    <a 

                    href="<?php echo esc_url(get_category_link(get_category_by_slug('toutes-les-actus'))); ?>"
                    class="btn btn-bleu group">
                
                    Les actualités 

                    <span class=" item-bleu-1 origin-left"></span>

                    <span class=" item-bleu-2 origin-left"></span>
                
                    <span class=" item-bleu-3 origin-left"></span>
                
                    <span class=" item-bleu-4 ">
                    Les actualités 
                    </span>

                    </a>
                </article>

                <!-- Mail et téléphone -->
                <article class="espaceur-section" >
                    <header class="pb-2">
                        <h3 class="titre-header "> Mail et téléphone  </h3>
                    </header>

                    <p class=" mb-2">
                        Vous avez la possibilité de joindre chaque enseignant via une adresse mail professionnelle ou dans certains cas, directement via leur n° de téléphone privé. 
                    </p>

                    <p class= "text-rose-rouge mb-4" >Nous attirons votre attention sur le fait que nos enseignants ont le droit à une coupure après leur journée de travail. 
                    </p>
                        

                    <a 

                        href="<?php echo esc_url(get_permalink(get_page_by_path('lequipe'))); ?>"
                        class="btn btn-bleu group">
                    
                        L'équipe  

                        <span class=" item-bleu-1 origin-left"></span>

                        <span class=" item-bleu-2 origin-left"></span>
                    
                        <span class=" item-bleu-3 origin-left"></span>
                    
                        <span class=" item-bleu-4 ">
                        L'équipe  
                        </span>

                    </a>
                </article>


                <!-- WhatsApp -->
                <article class="espaceur-section" >
                    <header class=" flex pb-2 ">
                        <h3 class="titre-header pr-2 "> WhatsApp  </h3>

                    </header>

                    <p class=" mb-4">
                    WhatsApp est une application <span class=" accentue ">gratuite </span> de messagerie instantanée.  La plupart des enseignants l’utilisent pour communiquer directement avec vous. 
                    </p>

                </article>

                <!-- Padlet -->
                <article class="" >

                    <header class="flex pb-2">
                        <h3 class="titre-header  pr-2"> Padlet </h3>
                    
                    </header>

                    <p class=" mb-4">
                    Padlet est un outil en ligne de création et de partage de contenu. <span class=" accentue ">Fiable, gratuit et privé, </span>  il nous permet de partager avec vous le quotidien de chaque classe.
                    À chaque classe son padlet et celui-ci est géré par le titulaire qui vous en donne l’accès . 
                    </p>

                </article>

            </section>
        </div>
    </div>

</main>


<?php get_footer(); ?>
