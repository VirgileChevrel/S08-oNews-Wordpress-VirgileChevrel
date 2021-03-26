<?php 


/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function onews_scripts() {

    wp_enqueue_style( 'onews-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'onews-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'onews_scripts' );


/* PERSONNALISATION DU MENU */

function onews_add_css_to_li_menu($plopClasses) {
    // $plopClasses = ;

    // on ne veut pas prendre en compte les classes que Wordpress avait prévu d'utiliser
    // on se passe des valeurs fournies
    return ['left__nav-item'];
}
add_action( 'nav_menu_css_class', 'onews_add_css_to_li_menu' );


/**
 * Avant d'afficher le lien du menu on modifie la liste des attributs que wordpress va appliquer à la balise a
 *
 * @param [type] $aAttributes liste des attributs que wordpress va appliquer
 * @return string[]
 */
function onews_add_css_to_a_elements_in_menu($aAttributes) {
    // on rajoute un attribut class à la liste des attributs de la balise a du lien
    $aAttributes['class'] = 'left__nav-link';
    return $aAttributes;
}
add_action( 'nav_menu_link_attributes', 'onews_add_css_to_a_elements_in_menu' );
