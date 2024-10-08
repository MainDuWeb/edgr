<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', function() {


    Container::make( 'theme_options', __( 'Theme Options' ) )

        ->add_tab('Présentation ecole',[
                Field::make( 'text', 'bibliotheque', 'Lien de la bibliothèque' ),
                Field::make( 'text', 'maternelle', 'Nombre d élèves en maternelle' ),
                Field::make( 'text', 'primaire', ' Nombre d élèves en primaire' ),
                Field::make( 'text', 'inclusif', ' Nombre d élèves en classe inclusive' ),
                Field::make( 'text', 'total', 'Nombre d élèves au total '),
        ])

        ->add_tab('Garderie ',[
                Field::make( 'text', 'garderie_matin', ' Madame garderie du matin ' ),
                Field::make( 'text', 'garderie_mercredi', ' Madame garderie du mercredi ' ),
                Field::make( 'text', 'lien_garderie_mercredi', 'Lien de la Garderie du mercredi' ),
                Field::make( 'text', 'garderie_apres_midi', ' Madame garderie de l après-midi ' ),
        ])

        ->add_tab('Contact',[
                Field::make( 'text', 'tel_direction', 'N° de téléphone Direction' ),
                Field::make( 'text', 'mail', 'Mail Direction' ),

                Field::make( 'text', 'nom_pms_1', ' Nom + prénom pms 1' ),
                Field::make( 'text', 'phone_pms_1', ' N° de téléphone pms 1' ),
                Field::make( 'text', 'metier_pms_1', ' Métier pms 1' ),
                Field::make( 'text', 'mail_pms_1', ' Mail pms 1' ),

                Field::make( 'text', 'nom_pms_2', ' Nom + prénom pms 2 ' ),
                Field::make( 'text', 'phone_pms_2', ' N° de téléphone pms 2' ),
                Field::make( 'text', 'metier_pms_2', ' Métier pms 2' ),
                Field::make( 'text', 'mail_pms_2', ' Mail pms 2' ),
                
                Field::make( 'text', 'nom_garderie_bruyere', ' Nom garderie bruyères' ),
                Field::make( 'text', 'tel_bruyere', '  N° de téléphone garderie école des bruyères' ),
                Field::make( 'text', 'mail_bruyere', ' Mail garderie école des bruyères' ),

        ])

        ->add_tab('Adresses ',[
            Field::make( 'text', 'adresse_ecole', 'adresse de l ecole' ),
            Field::make( 'text', 'lien_adresse_ecole', ' Lien google de l adresse de l école' ),
            Field::make( 'text', 'adresse_bruyere', ' adresse  de la garderie du bruyere' ),
            Field::make( 'text', 'lien_adresse_bruyere', ' Lien google de la garderie du bruyere' ),
            
            ])
        
        ->add_tab('Actualités',[
            Field::make( 'text', 'lien_agenda', 'Agenda Google' ),
            
        ])

        ->add_tab('Footer',[
            Field::make( 'text', 'lien_vdh', 'Ville de Herve' ),

        ]);
        
});

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1200, 400, true );
add_image_size( 'actualite', 1200, 400, true);
add_image_size( 'equipe', 350, 400, true);
add_image_size( 'detail-actu', 900, 400, true);
add_image_size( 'infrastructure', 1200, 400, true);

function custom_excerpt_length($length) {
    return 20; 
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
// Ajouter la prise en charge des menus de navigation


register_nav_menus(
    array(
        'main' => 'Menu principal',
        'footer' => 'Bas de page',
    )
);



// Fonction pour ajouter des scripts et des feuilles de style
function edgr_register_scripts_styles() {
    // Enregistrer et ajouter les styles
    wp_enqueue_style(
        'defaultStyle',
        get_stylesheet_uri(),
        array(),
        '1.0'
    ); 

    wp_enqueue_script(
        'maijs',
        get_template_directory_uri() . '/main.js', // Correction du chemin
        array(), // Dépendances du script (si aucune, laisser un tableau vide)
        '1.0', // Version du script
        true // Chargé dans le pied de page
    );

    wp_enqueue_style(
        'Poppins',
        "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,800&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap",
        array(),
        null // Utiliser null pour ne pas ajouter de version
    ); 
    wp_enqueue_style(
        'animate',
        "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css",
        array(),
        null // animated
    ); 

    // Enregistrer et ajouter les scripts
    // Version de développement
}

add_action('wp_enqueue_scripts', 'edgr_register_scripts_styles');

