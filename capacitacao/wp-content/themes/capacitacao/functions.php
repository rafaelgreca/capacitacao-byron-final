<?php

//Conecta com o arquivo do banco de dados
require get_template_directory() . '/inc/database.php';

require get_template_directory() . '/inc/formularios.php';

require get_template_directory() . '/inc/options.php';

function capacitacao_setup(){
  //Adiciona a imagem principal nas páginas
  add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'capacitacao_setup');

function capacitacao_styles(){
    //Adiciona os styles
    wp_register_style('font', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900', array(), '4.0.0');
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '3.0.0');
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '2.0.0');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0.0');


    //Adiciona os scripts
    wp_register_script('script', get_template_directory_uri() . '/script/script.js', array(), '5.0.0');
    wp_register_script('carousel-script', get_template_directory_uri() . '/script/jquery.slides.min.js', array('jquery'), '6.0.0');


    // Registering Bootstrap style
    //wp_enqueue_style( 'bootstrap_min', get_stylesheet_directory_uri().'/css/bootstrap/bootstrap.css' );

    //wp_enqueue_script('jquery');
    //Registering Bootstrap Script
    //wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/script/bootstrap/bootstrap.js', array(), '', true );

    //Enfileira os styles
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('font');
    wp_enqueue_style('style');

    //Enfileira os scripts
    wp_enqueue_script('script');
    wp_enqueue_script('carousel-script');
}

// Comunica os códigos da função com o WordPress
add_action('wp_enqueue_scripts', 'capacitacao_styles');

//Carousel
/*function capacitacao_carousel(){

  $labels = array(
      'name' => _x('Carousel', 'General Name', 'roots'),
      'singular_name' => _x('Carousel', 'Singular Name', 'roots'),
      'menu_name' => __('Carousel', 'roots'),
      'parent_item_colon' => __('Parent Banner', 'roots'),
      'all_items' => __('All Images', 'roots'),
      'view_item' => __('View Carousel', 'roots'),
      'add_new_item' => __('Add new image', 'roots'),
      'add_new' => __('Add new carousel', 'roots'),
      'edit_item' => __('Edit Carousel', 'roots'),
      'update_item' => __('Update Carousel', 'roots'),
      'search_items' => __('Search Carousel', 'roots'),
      'not_found' => __('Not found', 'roots'),
      'not_found_in_trash' => __('Not found in trash', 'roots'),
  );

  $ops = array(
      'label' => __('Carousel', 'roots'),
      'labels' => $labels,
      'supports' => array('title','thumbnail'),
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menu' => false,
      'show_in_admin_bar' => true,
      'menu_position' => 7,
      'can_export' => true,
      'has_archive' => false,
      'exclude_from_search' => true,
      'publicly_queryable' => true,
      'rewrite' => false,
      'capability_type' => 'post',
  );

  register_post_type('carousel', $ops);
}

add_action('init', 'capacitacao_carousel');*/

//Adiciona os menus
function capacitacao_menu(){
    register_nav_menus(array(
        'menu-header' => __('Menu Header', 'capacitacao'),
        'menu-social' => __('Menu Social', 'capacitacao')
    ));
}

add_action('init', 'capacitacao_menu' );


function pp_scripts() {
    // Registering Bootstrap style
    wp_enqueue_style( 'bootstrap_min_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css', array(), '10.0.0' );

    wp_enqueue_script('jquery');
    //Registering Bootstrap Script
    wp_enqueue_script( 'bootstrap_min_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js', array('jquery'), '11.0.0');
}
add_action( 'wp_enqueue_scripts', 'pp_scripts' );

add_action( 'init', 'custom_bootstrap_slider' );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Carousel Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slide'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'slider', $args );
}
