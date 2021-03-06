<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//lien avec la feuille de style 
function theme_scripts()
{
    wp_enqueue_style("theme-style", get_stylesheet_uri());
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', array('jquery'));
}
add_action("wp_enqueue_scripts", "theme_scripts");