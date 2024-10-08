<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body class=" "<?php body_class(); ?>>

    <style>
        .collapsed {
            display: none;
        }
        .expanded {
            display: block;
        }

        .loader {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex; 
            justify-content: center;
            align-items: center;
        }

        .fondu-out {
            opacity: 0;
            transition: opacity 0.3s ease-out;
        }

    </style>

    <?php wp_body_open(); ?>
<!--  top-0!! -->
    <header class="bg-nav text-text-nav w-full shadow-md z-50 fixed">

        <nav>
            <!-- Menu desktop -->
            <div class="hidden mx-8 md:flex justify-between py-1">
     
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="w-12" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_ecole.webp" alt="">
                </a>
                <ul class="menu">
                    <!-- ACCUEIL -->
                    <li class="item-menu">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
                    </li>
                    <!-- L'ECOLE -->
                    <li class="item-menu group">
                        <div class="flex gap-1">
                            <a class="inline-block group-hover" href="#">L'école</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </div>
                        <ul class="dropdown-menu group-hover:block">
                            <li><a class="sub-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('presentation-de-lecole'))); ?>">Présentation de l'école</a></li>
                            <li><a class="sub-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('lequipe'))); ?>">L'équipe</a></li>
                            <li><a class="sub-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('infrastructure'))); ?>">L'infrastructure</a></li>
                        </ul>
                    </li>
                    <!-- INFORMATION -->
                    <li class="item-menu group">
                        <div class="flex gap-1">
                            <a class="inline-block group-hover" href="#">Informations</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </div>
                        <ul class="dropdown-menu group-hover:block">
                            <li><a class="sub-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('horaire-des-cours'))); ?>">Horaires des cours</a></li>
                            <li><a class="sub-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('garderie'))); ?>">Garderie</a></li>
                            <li><a class="sub-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('communication'))); ?>">Communication</a></li>
                            <li><a class="sub-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('activite_extra_scola'))); ?>">Activité extra-scolaire</a></li>
                        </ul>
                    </li>
                    <!-- ACTUALITÉ -->
                    <li><a class="item-menu" href="<?php echo esc_url(get_category_link(get_category_by_slug('toutes-les-actus'))); ?>">Actualités</a></li>
                    <!-- DOCUMENTS -->
                    <li><a class="item-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('documents'))); ?>">Documents</a></li>
                    <!-- CONTACT -->
                    <li><a class="item-menu" href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">Contact</a></li>
                </ul>
            </div>

            <!-- Menu SM -->
            <div class="md:hidden">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img class="py-1 w-10" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_ecole.webp" alt="logo">
                    </a>
                    <button id="trigger" type="button" class="inline-flex items-center bg-blanc-bg justify-center p-2 w-10 h-10 text-sm text-vert-olive rounded-lg focus:ring-vert-olive" aria-controls="navbar-hamburger" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div id="target" class="hidden w-full">
                        <ul class="text-xl rounded-lg mx-2">
                            <!-- Accueil -->
                            <li><a class="sub-menu-item" href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
                            <!-- L'école -->
                            <li>
                                <ul>
                                    <li><a class="sub-menu-item" href="<?php echo esc_url(get_permalink(get_page_by_path('presentation-de-lecole'))); ?>">Présentation de l'école</a></li>
                                    <li><a class="sub-menu-item" href="<?php echo esc_url(get_permalink(get_page_by_path('lequipe'))); ?>">L'équipe</a></li>
                                    <li><a class="sub-menu-item" href="<?php echo esc_url(get_permalink(get_page_by_path('infrastructure'))); ?>">L'infrastructure</a></li>
                                </ul>
                            </li>
                            <!-- Information -->
                            <li>
                                <ul>
                                    <li><a class="sub-menu-item" href="<?php echo esc_url(get_permalink(get_page_by_path('horaire-des-cours'))); ?>">Horaires des cours</a></li>
                                    <li><a class="sub-menu-item" href="<?php echo esc_url(get_permalink(get_page_by_path('garderie'))); ?>">Garderie</a></li>
                                    <li><a class="sub-menu-item" href="<?php echo esc_url(get_permalink(get_page_by_path('communication'))); ?>">Communication</a></li>
                                    <li><a class="sub-menu-item" href="<?php echo esc_url(get_permalink(get_page_by_path('activite_extra_scola'))); ?>">Activité extra-scolaire</a></li>
                                </ul>
                            </li>
                            <!-- ACTUALITÉ -->
                            <li><a class="sub-menu-item" href="<?php echo esc_url(get_category_link(get_category_by_slug('toutes-les-actus'))); ?>">Actualités</a></li>
                            <!-- DOCUMENTS -->
                            <li><a class="sub-menu-item" href="<?php echo esc_url(get_permalink(get_page_by_path('documents'))); ?>">Documents</a></li>
                            <!-- CONTACT -->
                            <li><a class="sub-menu-item border-b-0" href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </nav>

    </header>

    <div class="loader ">

        <div class="w-full flex justify-center items-center ">

            <div class="animate-pulse">
                <img 
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_ecole.webp" 
                    alt="logo">
            </div>

        </div>
    </div>

    <?php wp_footer(); ?>

