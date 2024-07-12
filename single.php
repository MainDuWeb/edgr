<?php get_header(); ?>

<main class="lg:px-36 ">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class=" ">
      
    <!-- flex -->


     
      <div class="">
      
        <?php the_post_thumbnail('detail-actu', ['class' => 'rounded-2xl h-48 md:h-80 w-full ']); ?> 

      </div>

    <div class="lg:flex gap-6 ">          

      <!-- Flex 1 -->
      <div class=" mt-8 md:min-w-80 ">
          
        <div class="bg-blanc-gris rounded-xl "> 

            <!-- Ou quand Lien -->
            <div class="p-4">

                <p class=" my-2 text-xs "> Publié le <?php the_date(); ?></p> 

                <!-- Quand -->
                <p class=" mb-2 ">
                  <span class="accentue">Quand:</span>
                    <time 
                      
                      datetime="<?php the_field('date'); ?>">
                      <?php the_field('date'); ?>
                    </time>
                </p>
                
                <!-- Où -->
                <p class=" mb-2">
                  <span class="accentue">Où:</span>
                  <span><?php the_field('ou'); ?></span>
                </p>

                <!-- Lien -->
                <p class="mb-2"><span ></span>

                  <a 
                    class="accentue mt-2 "
                    href="<?php the_field('lien'); ?>"
                    target="_blank">
                    Lien
                   
                  </a>
                </p>

                <!-- Catégorie-->


                    
                <div class=" max-w-full">
                      <div class=" flex pb-4 md:pb-0 md:pt-2">
                          <?php
                                      $categories = get_the_category();
                                      if ( ! empty( $categories ) ) {
                                        foreach ( $categories as $category ) {
                                            // Get each category's slug and name
                                            $category_slug = esc_html( $category->slug );
                                            $category_name = esc_html( $category->name );
                                            ?>
                                            <div class="px-3 py-0.5 mr-1 category-bg rounded-md text-blanc-bg text-sm <?php echo $category_slug; ?>">
                                                <?php echo $category_name; ?>
                                            </div>
                                            <?php
                                        }
                                      }
                          ?>
                      </div>
                    </div>
            </div>

          </div>
      </div>

      <!-- Flex 2 -->
      <div class=" mt-8 md:mr-8 ">
            <h2 class=" titre-présentation pb-4">
                <?php the_title(); ?>
            </h2>

            <div class="">
              <?php the_content(); ?>
            </div>
      </div>

    </div>
    </article>



  <?php endwhile; endif; ?> 

</main>
<?php get_footer(); ?>