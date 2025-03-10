<?php

// chargement des fichiers scripts
function ciel_scripts() : void{

    //paramètres; identifiant, chemin, dépendance, version, in-footer
    wp_enqueue_script( 'js_modernizr',get_template_directory_uri(). '/assets/js/modernizr.js',  array(),  false, true );
    wp_enqueue_script( 'js_isotope.pkgd.min', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',  array(),  false, true );
    wp_enqueue_script( 'js_imagesloaded.pkgd.min', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js',  array(),  false, true ); 
    wp_enqueue_script( 'js_jquery.waypoints.min', get_template_directory_uri().'/assets/js/jquery.waypoints.min.js',  array(),  false, true );
    wp_enqueue_script( 'js_animated-counter', get_template_directory_uri().'/assets/js/animated-counter.js',  array(),  false, true ); // 1) id unique 2) chemin
    wp_enqueue_script( 'js_jquery.meanmenu.min', get_template_directory_uri().'/assets/js/jquery.meanmenu.min.js',  array(),  false, true );
    wp_enqueue_script( 'js_parallax.min', get_template_directory_uri().'/assets/js/parallax.min.js',  array(),  false, true );
    wp_enqueue_script( 'js_animated-headline', get_template_directory_uri().'/assets/js/animated-headline.js',  array(),  false, true );
    wp_enqueue_script( 'js_one-page-nav', get_template_directory_uri().'/assets/js/one-page-nav.js',  array(),  false, true ); 
    wp_enqueue_script( 'js_slick.min', get_template_directory_uri().'/assets/js/slick.min.js',  array(),  false, true );
    wp_enqueue_script( 'js_particles.min',get_template_directory_uri(). '/assets/js/particles.min.js',  array(),  false, true );
    wp_enqueue_script( 'js_tilt.jquery.min',get_template_directory_uri(). '/assets/js/tilt.jquery.min.js',  array(),  false, true );
    wp_enqueue_script( 'js_jquery.pointlight', get_template_directory_uri().'/assets/js/jquery.pointlight.js',  array(),  false, true ); 
    wp_enqueue_script( 'js_main', get_template_directory_uri().'/assets/js/main.js',  array(),  false, true );
}

add_action('wp_enqueue_scripts','ciel_scripts');

// chargement des fichiers css
function ciel_styles() : void{

    //paréamètres; identifiant, chemin, dépendance, écran (screen, all...)
    wp_enqueue_style( 'css_normalize.min', get_template_directory_uri().'/assets/css/normalize.min.css',  array(), null);
    wp_enqueue_style( 'css_animate.min', get_template_directory_uri().'/assets/css/animate.min.css',  array(), null);
    wp_enqueue_style( 'css_bootstrap.min', get_template_directory_uri().'/assets/css/bootstrap.min.css',  array(), null );
    wp_enqueue_style( 'css_meanmenu', get_template_directory_uri().'/assets/css/meanmenu.css',  array(), null);
    wp_enqueue_style( 'css_starAnimation', get_template_directory_uri().'/assets/css/starAnimation.css',  array(), null);
    wp_enqueue_style( 'css_slick', get_template_directory_uri().'/assets/css/slick.css',  array(), null );
    wp_enqueue_style( 'css_theme-default', get_template_directory_uri().'/assets/css/theme-default.css',  array(), null);
    wp_enqueue_style( 'css_theme-default', get_template_directory_uri().'/assets/css/style.css',  array(), null);
}

add_action('wp_enqueue_scripts','ciel_styles');

// mettre une image de mise en avant pour dynamiser les vues
add_theme_support( 'post-thumbnails' );
