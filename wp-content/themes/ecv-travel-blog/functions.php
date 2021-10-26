<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//lien avec la feuille de style 
function add_theme_assets()
{
    wp_enqueue_style("theme-style", get_stylesheet_uri());
    wp_enqueue_style("main-style", get_template_directory_uri() . '/assets/scss/app.css');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'));
}
add_action("wp_enqueue_scripts", "add_theme_assets");

// Init menu
function add_theme_menu()
{
    register_nav_menu('Custom Menu', __('Custom Menu'));
}
add_action('init', 'add_theme_menu');