<?php 
    function ciel_scripts() : void{
    
        //paramètres; identifiant, chemin, dépendance, version, in-footer ranger dans l'ordre du index.html d'origine
        wp_enqueue_script( 'js-jquery-3.5.1', get_template_directory_uri() .'/assets/js/jquery-3.5.1.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-popper', get_template_directory_uri() .'/assets/js/popper.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-modernizr',get_template_directory_uri() . '/assets/js/modernizr.js',  array(),  false, true );
        wp_enqueue_script( 'js-isotope', get_template_directory_uri() .'/assets/js/isotope.pkgd.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-imagesloaded', get_template_directory_uri() .'/assets/js/imagesloaded.pkgd.min.js',  array(),  false, true ); 
        wp_enqueue_script( 'js-jquery.waypoints', get_template_directory_uri() .'/assets/js/jquery.waypoints.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-animated-counter', get_template_directory_uri() .'/assets/js/animated-counter.js',  array(),  false, true ); 
        wp_enqueue_script( 'js-jquery.meanmenu', get_template_directory_uri()  .'/assets/js/jquery.meanmenu.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-parallax', get_template_directory_uri() .'/assets/js/parallax.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-animated-headline', get_template_directory_uri() .'/assets/js/animated-headline.js',  array(),  false, true );
        wp_enqueue_script( 'js-one-page-nav', get_template_directory_uri() .'/assets/js/one-page-nav.js',  array(),  false, true ); 
        wp_enqueue_script( 'js-slick', get_template_directory_uri() .'/assets/js/slick.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-particles',get_template_directory_uri() . '/assets/js/particles.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-tilt.jquery.min',get_template_directory_uri() . '/assets/js/tilt.jquery.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-jquery.pointlight', get_template_directory_uri() .'/assets/js/jquery.pointlight.js',  array(),  false, true ); 
        wp_enqueue_script( 'js-main', get_template_directory_uri() .'/assets/js/main.js',  array(),  false, true );
        // script restant qui ne sont pas dans l'index HTML de base
        // wp_enqueue_script( 'js-fogEffect', get_template_directory_uri() .'/assets/js/fogEffect.js',  array(),  false, true );
        // wp_enqueue_script( 'js-html5shiv',get_template_directory_uri() . '/assets/js/html5shiv.min.js',  array(),  false, true );
        // wp_enqueue_script( 'js-respond', get_template_directory_uri() .'/assets/js/respond.min.js',  array(),  false, true ); 
        // wp_enqueue_script( 'js-selectivizr', get_template_directory_uri() .'/assets/js/selectivizr-min.js',  array(),  false, true );
    }

    add_action('wp_enqueue_scripts','ciel_scripts');

    function ciel_styles() : void{

        //paréamètres; identifiant, chemin, dépendance, écran (screen, all...) ranger dans l'ordre du index.html 
        wp_enqueue_style( 'css-normalize', get_template_directory_uri()  .'/assets/css/normalize.min.css',  array(), null);
        wp_enqueue_style( 'css-animated-headline', get_template_directory_uri().'/assets/css/animated-headline.css',  array(), null);
        wp_enqueue_style( 'css-animate', get_template_directory_uri() .'/assets/css/animate.min.css',  array(), null);
        wp_enqueue_style( 'css-bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css',  array(), null );
        wp_enqueue_style( 'css-meanmenu', get_template_directory_uri() .'/assets/css/meanmenu.css',  array(), null);
        wp_enqueue_style( 'css-starAnimation', get_template_directory_uri() .'/assets/css/starAnimation.css',  array(), null);
        wp_enqueue_style( 'css-theme-default', get_template_directory_uri() .'/assets/css/theme-default.css',  array(), null);
        wp_enqueue_style( 'css-style', get_template_directory_uri() .'/assets/css/style.css',  array(), null);
        // css restant qui ne sont pas dans l'index HTML de base
        // wp_enqueue_style( 'css-slick', get_template_directory_uri() .'/assets/css/slick.css',  array(), null );
        // wp_enqueue_style( 'css-flaticon', get_template_directory_uri() .'/assets/css/flaticon.css',  array(), null);
        // wp_enqueue_style( 'css-font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.all.min.css',  array(), null);
        // wp_enqueue_style( 'css-icofont', get_template_directory_uri() .'/assets/css/icofont.min.css',  array(), null );
    }

    add_action('wp_enqueue_scripts','ciel_styles');

    //activer la fonctionnalitée de l'image de mise en avant 
    add_theme_support('post-thumbnails');
