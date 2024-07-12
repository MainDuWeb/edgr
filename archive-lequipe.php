<?php get_header(); ?>

<main class="md:px-16"> 

    <!-- Le saviez-vous ------------------------------------- -->
    <div class="mb-16">
        <header class="text-3xl mb-4">
            <h1>Le saviez-vous?</h1>
        </header>
        <p>
            Après une journée pleine d'aventures éducatives, <strong class="text-rose-rouge">nos instituteurs(trices) ont besoin d’une pause bien méritée.</strong> 
            Nous vous demandons donc d’être courtois et compréhensif dans vos échanges avec notre équipe. 
        </p>
    </div>              

    <section class="mb-8">

        <?php
        // Fonction pour afficher les articles de la taxonomie spécifiée
        function display_team_section($term_slug, $title, $border_color_class) {
            $args = array(
                'post_type' => 'lequipe', 
                'tax_query' => array(
                    array(
                        'taxonomy' => 'fonction', 
                        'field'    => 'slug',
                        'terms'    => $term_slug,
                    ),
                ),
            );

            $my_query = new WP_Query($args);

            if ($my_query->have_posts()) : ?>
                <article class="espaceur-equipe">
                    <h3 class="text-4xl font-bold pb-4 md:col-span-1"><?php echo $title; ?></h3>
                    <div class="grid_equipe">
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="bg-[#ECF1F5] text-white p-2 rounded-lg">
                                <div class="md:mt-4 md:mb-2">
                                    <figcaption class="taille-img">
                                        <?php the_post_thumbnail('equipe', ['class' => 'taille-img rounded-full border-4 ' . $border_color_class]); ?>
                                    </figcaption>
                                </div>
                                <div class="md:pt-4 grid grid-cols-1 place-items-center md:mb-4">  
                                    <div class="font-semibold <?php echo $border_color_class; ?>"> <?php the_field('classe'); ?> </div>
                                    <div class="font-semibold"><?php the_title(); ?></div>
                                    <div class="text-small">
                                        <a href="mailto: <?php the_field('@'); ?>"><?php the_field('@'); ?></a>
                                    </div>
                                    
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </article>
                <?php wp_reset_postdata(); 
            else :
                echo '<p>Aucun article trouvé.</p>'; 
            endif;
        }

        // Appels de la fonction pour chaque section
        display_team_section('direction', 'Direction', 'border-[#1F4E6F] text-bleu-fonce ');
        display_team_section('maternelle', 'Maternelle', 'border-[#94677A] text-rose-vieux ');
        display_team_section('primaire', 'Primaire', 'border-[#748245] text-vert-militaire');
        display_team_section('inclusive', 'Classe inclusive', 'border-[#266C7B] text-bleu-turquoise');
        display_team_section('maitre_speciaux', 'Maitre spéciaux', 'border-[#6A4D6F] text-mauve');
        display_team_section('pms', 'PMS', 'border-[#6A4D6F] text-mauve');
        ?>

    </section>

</main>

<?php get_footer(); ?>
