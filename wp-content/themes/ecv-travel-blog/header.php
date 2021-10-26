<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/scss/app.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">
        <a href="<?php echo home_url('/'); ?>" class="link-logo-menu">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="logo-menu">
        </a>

        <?php
            wp_nav_menu(array(
                'theme_location'    => 'Custom Menu',
                'menu_class'        => 'custom-menu-class'
            ));
        ?>
    </header>