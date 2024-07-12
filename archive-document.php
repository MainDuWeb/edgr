<?php get_header(); ?> 

<main class=" md:px-36 ">
    <div class="grid lg:grid-cols-5 ">

    <div class="lg:col-span-2">

        <div class="lg:fixed px-4 ">
            
            <h1 class=" text-4xl  font-semibold">Documents</h1>

            <p class="mb-8 mt-4 max-w-96 "> 
                <span class="accentue">Téléchargez ici</span> tous les documents nécessaires et renvoyez-les nous complétés par <span class="accentue">mail</span> <br>
                ou demandez-nous <span class="accentue">une version papier</span> gratuite      
            </p>

        </div>

    </div>

    <div class="lg:col-span-3 ">

        <?php
                // 1. On définit les arguments pour définir ce que l'on souhaite récupérer 
                $args = array(
                'posts_per_page' => 25, 
                'post_type' => 'document'
                );
                // 2. On exécute la WP Query
                $my_query = new WP_Query( $args );
                // 3. On lance la boucle !
                if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query-> the_post(); ?> 

            <div class=" bg-blanc-gris p-6 mb-2 md:mb-4 rounded-2xl ">
                    
                    <h3 class="text-2xl font-semibold"><?php the_title(); ?></h3>

                    <div class="text-xs font-light pb-4"> 
                        <?php the_content(); ?>
                    </div>
                    
                    <?php

                $file = get_field('document'); 
                if( $file ): 
                    $url = $file['url'];
                    $title = $file['title'];
                    ?>
                    <a href="<?php echo esc_url($url); ?>" download class="btn-sm-bleu ">Télécharger</a>
                <?php endif; ?>

            </div>

        <?php endwhile; endif; ?> 

    </div>


  

</main>
<?php get_footer(); ?>
