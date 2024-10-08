
<?php get_header(); ?> 

   
       <!-- HERO -->
        <section class="bg-hero bg-no-repeat bg-cover bg-top w-full h-4/5 md:min-h-full max-w-[2000px] mx-auto ">

            <div class="xxl:py-24"></div>
            <div class="flex items-end ">

                    <div class="bg-noir bg-opacity-70 mx-4 text-blanc-bg rounded-2xl mt-72 md:mt-96 p-6 mb-12 animate__animated animate__zoomIn">
                    
                        <h1 class=" text-4xl md:text-5xl font-semibold mb-2">
                                <p class="text-xl font-normal">École communale de</p>
                                Grand-Rechain
                        </h1>

                        <h4 class="text-small mb-3">Maternelle-Primaire</h4>

                        <p class="mb-4 hidden md:block">Découvrez notre école, nos valeurs, <br> 
                            notre approche pédagogique et bien plus encore!
                        </p>
                        
                        <a 
                            href="<?php echo esc_url(get_permalink(get_page_by_path('presentation-de-lecole'))); ?>"
                            class="btn btn-rose group">
                            
                            Présentation de l'école

                            <span class=" item-rose-1 origin-left">
                            </span>

                            <span class=" item-rose-2 origin-left">
                            </span>
                            
                            <span class=" item-rose-3 origin-left">
                            </span>
                            
                            <span class=" item-rose-4 text-[#2777AC] group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute left-6 z-10 ">
                                
                            Présentation de l'école
                            </span>
                        </a>

                    </div>
            </div>
           
        </section>


    <main class="mt-8 pt-8 max-w-[2000px] ">

        <section class= "md:mx-20  ">
    
            <h2 class="text-4xl font-semibold  mb-2  " > Nos dernières actualités </h2>

            <div class=" grid_accueil  " >
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?> 
                
                    <article class="bg-blanc-gris mb-6 rounded-2xl w-full max-w-96 md:max-w-full shadow-md shadow-[#1f4e6f31] hover:shadow-[#1f4e6f55] transition-all  ">
                          
                        <div class="w-auto">
                            <?php the_post_thumbnail('actualite', ['class' => 'rounded-t-2xl h-48 ']); ?> 
                        </div>

                        <div class="p-4 ">
                            
                            <h3 class="text-xl font-semibold pb-2">
                                <?php
                                    $title = get_the_title();
                                    if (strlen($title) > 20) {
                                        echo substr($title, 0, 20) . '...';
                                    } else {
                                        echo $title;
                                    }
                                ?>
                            </h3>

                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
                                    <path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/>
                                </svg>
                                <div class="pl-1 pb-1 accentue">
                                    <?php the_field('date') ; ?>
                                </div>
                            </div>
                                
                     
                            <div class="flex mb-4">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    foreach ($categories as $category) {
                                        // Get each category's slug and name
                                        $category_slug = esc_html($category->slug);
                                        $category_name = esc_html($category->name);
                                        $category_link = get_category_link($category->term_id);
                                        ?>
                                        <a href="<?php echo esc_url($category_link); ?>" class="px-3 py-0.5 mr-2 border-gray-300 category-bg rounded-md text-blanc-bg <?php echo $category_slug; ?>">
                                            <?php echo $category_name; ?>
                                        </a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>

                                                

                            <div class="mb-4 font-light max-h-12 sm2:min-h-14 md:min-h-16  ">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="pb-4 pt-8 ">

                                <a 
                                    href="<?php the_permalink(); ?>" 
                                    class=" btn-card  ">
                                    Lire la suite
                                </a>

                            </div>


                        </div>
                    </article>
            
                <?php endwhile; endif; ?> 
            </div>


            <div class="">
                <p class=" mb-3">Consultez toutes les actualités de l’école et ne ratez plus aucun événement !   </p>
            </div>
            
            <a href="<?php echo esc_url(get_category_link(get_category_by_slug('toutes-les-actus'))); ?>"
                class="btn btn-rose group">
                
                Toutes les actualités

                <span class=" item-rose-1 origin-left">
                </span>

                <span class=" item-rose-2 origin-left">
                </span>
                
                <span class=" item-rose-3 origin-left">
                </span>
                
                <span class=" item-rose-4 text-[#2777AC] group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute left-6 z-10 ">
                    
                Toutes les actualités
                </span>
            </a>

        </section>
  
    </main>

<?php get_footer(); ?>