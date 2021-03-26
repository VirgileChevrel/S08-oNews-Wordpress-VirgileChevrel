<?php 


/* Ceci est le fichier functions.php, il contient des scripts pour ajouter des fonctionnalités à wordpress */

/* On préfixe toutes les fonctions de notre thème avec le nom du thème */
function onews_scripts() {

    /* on va préciser à wordpress qu'il faut charger les feuilles de style suivantes */
    wp_enqueue_style( 'onews-reset', get_template_directory_uri() . '/assets/css/reset.css', [], wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'onews-style', get_template_directory_uri() . '/assets/css/style.css', [], wp_get_theme()->get( 'Version' ) );

    if (is_page())
    {
        wp_enqueue_style( 'onews-style-gabriel', get_template_directory_uri() . '/assets/css/style_gabriel.css', [], wp_get_theme()->get( 'Version' ) );
    }

}

// wordpress utilise un sytème de hook (c'est l'équivalent des eventListener de JS)
add_action( 'wp_enqueue_scripts', 'onews_scripts' );


/* Définition d'un emplacement de menu */
function onews_after_setup_theme() {

    // register_nav_menu permet de prévenir wordpress qu'il y a un emplacement de menu
    register_nav_menus([
        'menu-footer' => 'Menu du footer'
    ]);
}

add_action( 'after_setup_theme', 'onews_after_setup_theme' );

/* personnalisation de l'affichage du menu */
function onews_navigation_customization($currentClassList) {
// wordpress nous fournit la liste des classes qu'il compte appliqué, à nous de lui fournir la liste finale
    $currentClassList[] = 'left__nav-item';
    return $currentClassList;
}

add_action( 'nav_menu_css_class', 'onews_navigation_customization' );

/*
créer une fonction
l'ajouter au système de hook sur l'événement nav_menu_link_attributes

dans le code ajouter la classe `left__nav-link`
*/

function onews_navigation_customization_a_element($currentAttributes) {
    // wordpress nous fournit la liste des classes qu'il compte appliqué, à nous de lui fournir la liste finale
    $currentAttributes['class'] = 'left__nav-link';
    return $currentAttributes;
}
    
add_action( 'nav_menu_link_attributes', 'onews_navigation_customization_a_element' );
