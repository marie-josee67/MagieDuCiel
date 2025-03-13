<?php 
    function ciel_scripts() : void{
    
        //paramètres; identifiant, chemin, dépendance, version, in-footer
        wp_enqueue_script( 'js_jquery-3.5.1',get_template_directory_uri(). '/assets/js/jquery-3.5.1.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_animated-counter', get_template_directory_uri().'/assets/js/animated-counter.js',  array(),  false, true ); // 1) id unique 2) chemin
        wp_enqueue_script( 'js_animated-headline', get_template_directory_uri().'/assets/js/animated-headline.js',  array(),  false, true );
        wp_enqueue_script( 'js_bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_fogEffect', get_template_directory_uri().'/assets/js/fogEffect.js',  array(),  false, true );
        wp_enqueue_script( 'js_html5shiv',get_template_directory_uri(). '/assets/js/html5shiv.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_imagesloaded', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js',  array(),  false, true ); 
        wp_enqueue_script( 'js_isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_jquery.meanmenu', get_template_directory_uri().'/assets/js/jquery.meanmenu.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_jquery.pointlight', get_template_directory_uri().'/assets/js/jquery.pointlight.js',  array(),  false, true ); 
        wp_enqueue_script( 'js_jquery.waypoints', get_template_directory_uri().'/assets/js/jquery.waypoints.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_main', get_template_directory_uri().'/assets/js/main.js',  array(),  false, true );
        wp_enqueue_script( 'js_modernizr',get_template_directory_uri(). '/assets/js/modernizr.js',  array(),  false, true );
        wp_enqueue_script( 'js_one-page-nav', get_template_directory_uri().'/assets/js/one-page-nav.js',  array(),  false, true ); 
        wp_enqueue_script( 'js_parallax', get_template_directory_uri().'/assets/js/parallax.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_particles',get_template_directory_uri(). '/assets/js/particles.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_popper', get_template_directory_uri().'/assets/js/popper.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_respond', get_template_directory_uri().'/assets/js/respond.min.js',  array(),  false, true ); 
        wp_enqueue_script( 'js_selectivizr', get_template_directory_uri().'/assets/js/selectivizr-min.js',  array(),  false, true );
        wp_enqueue_script( 'js_slick', get_template_directory_uri().'/assets/js/slick.min.js',  array(),  false, true );
        wp_enqueue_script( 'js_tilt.jquery.min',get_template_directory_uri(). '/assets/js/tilt.jquery.min.js',  array(),  false, true );
    }

    add_action('wp_enqueue_scripts','ciel_scripts');

    function ciel_styles() : void{

        //paréamètres; identifiant, chemin, dépendance, écran (screen, all...)
        wp_enqueue_style( 'css_animate', get_template_directory_uri().'/assets/css/animate.min.css',  array(), null);
        wp_enqueue_style( 'css_animated-headline', get_template_directory_uri().'/assets/css/animated-headline.css',  array(), null);
        wp_enqueue_style( 'css_bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',  array(), null );
        wp_enqueue_style( 'css_flaticon', get_template_directory_uri().'/assets/css/flaticon.css',  array(), null);
        wp_enqueue_style( 'css_font-awesome', get_template_directory_uri().'/assets/css/font-awesome.all.min.css',  array(), null);
        wp_enqueue_style( 'css_icofont', get_template_directory_uri().'/assets/css/icofont.min.css',  array(), null );
        wp_enqueue_style( 'css_meanmenu', get_template_directory_uri().'/assets/css/meanmenu.css',  array(), null);
        wp_enqueue_style( 'css_normalize', get_template_directory_uri().'/assets/css/normalize.min.css',  array(), null);
        wp_enqueue_style( 'css_slick', get_template_directory_uri().'/assets/css/slick.css',  array(), null );
        wp_enqueue_style( 'css_starAnimation', get_template_directory_uri().'/assets/css/starAnimation.css',  array(), null);
        wp_enqueue_style( 'css_theme-default', get_template_directory_uri().'/assets/css/theme-default.css',  array(), null);
        wp_enqueue_style( 'css_style', get_template_directory_uri().'/assets/css/style.css',  array(), null);
    }

    add_action('wp_enqueue_scripts','ciel_styles');