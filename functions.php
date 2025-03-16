<?php 
    function ciel_scripts() : void{
        wp_enqueue_script( 'js-jquery', get_template_directory_uri().'/assets/js/jquery-3.5.1.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-popper', get_template_directory_uri().'/assets/js/popper.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-modernizr',get_template_directory_uri(). '/assets/js/modernizr.js',  array(),  false, true );
        wp_enqueue_script( 'js-isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-imagesloaded', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js',  array(),  false, true ); 
        wp_enqueue_script( 'js-jquery.waypoints', get_template_directory_uri().'/assets/js/jquery.waypoints.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-animated-counter', get_template_directory_uri().'/assets/js/animated-counter.js',  array(),  false, true ); 
        wp_enqueue_script( 'js-jquery.meanmenu', get_template_directory_uri().'/assets/js/jquery.meanmenu.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-parallax', get_template_directory_uri().'/assets/js/parallax.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-animated-headline', get_template_directory_uri().'/assets/js/animated-headline.js',  array(),  false, true );
        wp_enqueue_script( 'js-one-page-nav', get_template_directory_uri().'/assets/js/one-page-nav.js',  array(),  false, true ); 
        wp_enqueue_script( 'js-slick', get_template_directory_uri().'/assets/js/slick.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-particles',get_template_directory_uri(). '/assets/js/particles.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-tilt.jquery',get_template_directory_uri(). '/assets/js/tilt.jquery.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-jquery.pointlight', get_template_directory_uri().'/assets/js/jquery.pointlight.js',  array(),  false, true ); 
        // script restant qui ne sont pas dans l'index HTML de base
        wp_enqueue_script( 'js-main', get_template_directory_uri().'/assets/js/main.js',  array(),  false, true );
        wp_enqueue_script( 'js-fogEffect', get_template_directory_uri().'/assets/js/fogEffect.js',  array(),  false, true );
        wp_enqueue_script( 'js-html5shiv',get_template_directory_uri(). '/assets/js/html5shiv.min.js',  array(),  false, true );
        wp_enqueue_script( 'js-respond', get_template_directory_uri().'/assets/js/respond.min.js',  array(),  false, true ); 
        wp_enqueue_script( 'js-selectivizr', get_template_directory_uri().'/assets/js/selectivizr-min.js',  array(),  false, true );
    }
    add_action('wp_enqueue_scripts','ciel_scripts');

    // function ciel_styles() : void{

    //     //paréamètres; identifiant, chemin, dépendance, écran (screen, all...) ranger dans l'ordre du index.html 
    //     wp_enqueue_style( 'css-normalize', get_template_directory_uri().'/assets/css/normalize.min.css',  array(), null);
    //     wp_enqueue_style( 'css-animated-headline', get_template_directory_uri().'/assets/css/animated-headline.css',  array(), null);
    //     wp_enqueue_style( 'css-animate', get_template_directory_uri().'/assets/css/animate.min.css',  array(), null);
    //     wp_enqueue_style( 'css-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',  array(), null );
    //     wp_enqueue_style( 'css-meanmenu', get_template_directory_uri().'/assets/css/meanmenu.css',  array(), null);
    //     wp_enqueue_style( 'css-starAnimation', get_template_directory_uri().'/assets/css/starAnimation.css',  array(), null);
    //     wp_enqueue_style( 'css-slick', get_template_directory_uri().'/assets/css/slick.css',  array(), null );
    //     wp_enqueue_style( 'css-theme-default', get_template_directory_uri().'/assets/css/theme-default.css',  array(), null);
    //     // css restant qui ne sont pas dans l'index HTML de base
    //     wp_enqueue_style( 'css-font-awesome', get_template_directory_uri().'/assets/css/font-awesome.all.min.css',  array(), null);
    //     wp_enqueue_style( 'css-flaticon', get_template_directory_uri().'/assets/css/flaticon.css',  array(), null);
    //     wp_enqueue_style( 'css-icofont', get_template_directory_uri().'/assets/css/icofont.min.css',  array(), null );
    //     wp_enqueue_style( 'css-style', get_template_directory_uri().'/assets/css/style.css',  array(), null);
    // }

    // add_action('wp_enqueue_scripts','ciel_styles');

    //activer la fonctionnalitée de l'image de mise en avant 
    add_theme_support('post-thumbnails');


// création d'un nouveau post type de contenu dans wordpress pour le blog
function custom_articles() {
	$labels = array(
		'name'                  => _x( 'Articles', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Article', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Mes articles', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Article', 'Ajouter nouveau on Toolbar', 'textdomain' ),
		'add_nw'               => __( 'Ajouter nouveau', 'textdomain' ),
		'add_new_item'          => __( 'Ajouter nouvelle Article', 'textdomain' ),
		'new_item'              => __( 'nouveau Article', 'textdomain' ),
		'edit_item'             => __( 'Éditer article', 'textdomain' ),
		'view_item'             => __( 'Nouvel article', 'textdomain' ),
		'all_items'             => __( 'Toutes les articles', 'textdomain' ),
		'search_items'          => __( 'Rechercher une Articles', 'textdomain' ),
		'parent_item_colon'     => __( 'Articles parent:', 'textdomain' ),
		'not_found'             => __( 'Aucune articles trouver.', 'textdomain' ),
		'not_found_in_trash'    => __( 'Aucune articles trouver dans la corbeille.', 'textdomain' ),
		'featured_image'        => _x( 'Image de mise en avant', 'Overrides the “Featured Image” phrase for this post type. Ajoutered in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Définir image de mise en avant', 'Overrides the “Set featured image” phrase for this post type. Ajoutered in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Supprimer image de mise en avant', 'Overrides the “Remove featured image” phrase for this post type. Ajoutered in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Utiliser comme image de mise en avant', 'Overrides the “Use as featured image” phrase for this post type. Ajoutered in 4.3', 'textdomain' ),
		'archives'              => _x( 'Article archives', 'The post type archive label used in nav menus. Default “Post Archives”. Ajoutered in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into Article', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Ajoutered in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Article', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Ajoutered in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter Articles list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Ajoutered in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Articles list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Ajoutered in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Articles list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Ajoutered in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'article' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'          => 'dashicons-category', // pour choisir l'icone
        'show_in_rest'       => true, // met guthemberg
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'         => array('category', 'post_tag'),
	);

	register_post_type( 'article', $args );
}

add_action( 'init', 'custom_articles' );

// function qui permet de réduire la taille de l'extrait dans les articles de blog.
function extrait(){
    return 22;
}
add_filter('excerpt_length', 'extrait');

// création de menu
register_nav_menus( array (
    "Header" => "En-tête",
));

// function pour les catégories de la nav barre faire apparaitre les pages
function filter_articles_by_category($query) {
    // Vérifie si c'est une requête principale et une page de catégorie
    if ($query->is_category() && $query->is_main_query()) {
        // Exemple d'une modification de la requête pour filtrer par post type
        if (is_category()) {
            //filtrer les articles du post type personnalisé
            $query->set('post_type', 'article');
        }
    }
}
add_action('pre_get_posts', 'filter_articles_by_category');