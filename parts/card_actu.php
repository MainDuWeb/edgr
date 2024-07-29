
<main class="">

    <div class="grid lg:grid-cols-3">

        <!-- COLONNE 1 -->
        <div class="lg:col-span-1 ">
            <div class="lg:fixed max-w-64  xl:max-w-96  ">
                <h2 class="text-4xl font-bold mb-2">Les actualités</h2>
                <p class="mb-2">
                    Consultez ou synchronisez l'agenda de l'école au votre et ne ratez plus aucun événement!
                </p>
                <div class="my-4">
                    <a href= "<?= carbon_get_theme_option('lien_agenda'); ?>"
                       class="btn btn-rose group"
                       target="_blank"
                       >
                        Consultez l'agenda
                        <span class="item-rose-1 origin-left"></span>
                        <span class="item-rose-2 origin-left"></span>
                        <span class="item-rose-3 origin-left"></span>
                        <span class="item-rose-4">
                        Consultez l'agenda
                        </span>
                    </a>
                </div>
                <p class="texte-small mb-4">
                    Pour lier l'agenda, cliquez sur le bouton en bas à droite de l'écran
                </p>
            </div>
        </div>

        <!-- COLONNE 2 -->
        <div class="lg:col-span-2 ">
            <div class=" w-full">
                <div class="grid grid-cols-1   gap-6">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="bg-blanc-gris rounded-2xl md:flex">
                            <!-- IMG -->
                            <div class="w-auto">
                                <?php the_post_thumbnail('actualite', ['class' => 'rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none min-h-48 md:h-full  md:max-w-72 lg:max-w-80 xl:max-w-96']); ?>
                            </div>
                            <!-- Titre / Texte -->
                            <div class="p-4 text-sm">
                                <h3 class="text-2xl font-semibold pb-2">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
                                        <path d="M8 2v4" /><path d="M16 2v4" /><rect width="18" height="18" x="3" y="4" rx="2" /><path d="M3 10h18" /><path d="M8 14h.01" /><path d="M12 14h.01" /><path d="M16 14h.01" /><path d="M8 18h.01" /><path d="M12 18h.01" /><path d="M16 18h.01" />
                                    </svg>
                                    <div class="pl-1 pb-1 accentue">
                                        <?php the_time(get_option('date_format')); ?>
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

                                <div class="pb-8 font-light">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="pb-4">
                                    <a href="<?php the_permalink(); ?>" class="btn-sm-bleu">Lire la suite</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; endif; ?>
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
