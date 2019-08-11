<?php
require('inc/bs4navwalker.php');

function ck_register_menues() {
    register_nav_menus([
         'main-menu' => __('Main Menu')
    ]);
    
}

add_action('init','ck_register_menues');

/**
 * Register scripts and styles
 */

 function ck_register_scripts_and_styles() {
    /**
	 * Styles
	 */
	// Add Bootstrap CSS
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', [], '4.3.1', 'all');
	// Add Theme CSS
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', ['bootstrap']);
	// Add Theme Print CSS
	wp_enqueue_style('print-style', get_stylesheet_directory_uri() . '/css/print.css', ['bootstrap', 'style'], null, 'print');
	/**
	 * Scripts
	 */
	// Remove WordPress jQuery
	wp_deregister_script('jquery');
	// Add jQuery
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', [], '3.3.1', true);
	// Add popper.js
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], '1.14.7', true);
	// Add bootstrap.js
	wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery', 'popper'], '4.3.1', true);

	//Add script.js
	wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', ['jquery', 'popper', 'bootstrap'], false, true);
 };

 add_action('wp_enqueue_scripts', 'ck_register_scripts_and_styles');


 /**
  * Register the Hero Background
  */

  function ck_theme_setup() {
     //Add support for post thumbnails
     add_theme_support('post-thumbnails');
     //Set imag size for blog thumbnail
     set_post_thumbnail_size(180, 0, false);
     //Add Image size for single post featured image
     add_image_size('featured-image', 1110, 0, false);
     //Add Image size for hero image featured image
     add_image_size('hero_image', 1110, 500, false);
     //Add support for custom logo
     add_theme_support('custom-logo', [
               'height'       => 40,
               'width'        => 200,
               'flex-width'   => true,
               'flex-height'  => false,
               'header-text'  => ['site-title', 'site-description'],
     ]);
     //Add support for custom header
      add_theme_support('custom-header', [
                /*'default-image' => get_stylesheet_directory_uri() . '/assets/img/vinninge.jpg
                ',*/
                'default-text-color' => '000',
                'width'              => 2560,
                'height'             => 1000,
                'flex-width'         => true,
                'flex-height'        => false
      ]);
      load_theme_textdomain('cykling', get_template_directory() . '/languages');
  };
  add_action('after_setup_theme', 'ck_theme_setup');

/**
 * Register theme widget area
 * @return void
 */

 function ck_widgets_init() {
     //Blog Sidebar Widget area
     register_sidebar([
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<aside id="%1s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>', 
     ]);
     //Weather Sidebar Widget area
     register_sidebar([
        'name'          => 'Weather Widget Sidebar',
        'id'            => 'page-sidebar',
        'before_widget' => '<aside id="%1s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>', 
     ]);
     //Blog Sidebar Widget area
     register_sidebar([
        'name'          => 'Footer Sidebar',
        'id'            => 'footer-sidebar',
        'before_widget' => '<aside id="%1s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>', 
     ]);
 }
add_action('widgets_init', 'ck_widgets_init');
/**
 * Filterthe excerpt length to 20 words
 */

function cykling_excerpt_length($length) {
   return 20;
};

add_filter('excerpt_length', 'cykling_excerpt_length', 999, 1);

/**
 * Modify excerpt suffix
 */
function cykling_excerpt_more($more) {
   return '<div class="d-flex justify-content-center"><a href="' . get_permalink() . '" class="btn btn-success">Read more &raquo;</a></div>';
};

add_filter('excerpt_more', 'cykling_excerpt_more', 999, 1);

/**
 * include cpt ui
 */
function cptui_register_my_cpts() {

	/**
	 * Post Type: USPs.
	 */

	$labels = array(
		"name" => __( "USPs", "cykling" ),
		"singular_name" => __( "USP", "cykling" ),
	);

	$args = array(
		"label" => __( "USPs", "cykling" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "ck_usp", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-editor-ol",
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "ck_usp", $args );

	/**
	 * Post Type: Bikerides.
	 */

	$labels = array(
		"name" => __( "Bikerides", "cykling" ),
		"singular_name" => __( "Bikeride", "cykling" ),
	);

	$args = array(
		"label" => __( "Bikerides", "cykling" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "ck_bikerides", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-buddicons-replies",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ),
	);

	register_post_type( "ck_bikerides", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

//establish path to plugins

$ck_bikerides_plugins = array(
   '/acf.php',
   //including acf and its data
   '/acf_cycle_data.php',
   '/acf_hero_content.php',
);

foreach ( $ck_bikerides_plugins as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
};

/*
include cpt_ui_taxonomies
*/
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Locations.
	 */

	$labels = array(
		"name" => __( "Locations", "cykling" ),
		"singular_name" => __( "Location", "cykling" ),
	);

	$args = array(
		"label" => __( "Locations", "cykling" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'ck_bikeride_location', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "ck_bikeride_location",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "ck_bikeride_location", array( "ck_bikerides" ), $args );

	/**
	 * Taxonomy: Countries.
	 */

	$labels = array(
		"name" => __( "Countries", "cykling" ),
		"singular_name" => __( "Country", "cykling" ),
	);

	$args = array(
		"label" => __( "Countries", "cykling" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'ck_bikeride_country', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "ck_bikeride_country",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "ck_bikeride_country", array( "ck_bikerides" ), $args );

	/**
	 * Taxonomy: Categories.
	 */

	$labels = array(
		"name" => __( "Categories", "cykling" ),
		"singular_name" => __( "Category", "cykling" ),
	);

	$args = array(
		"label" => __( "Categories", "cykling" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'ck_bikeride_caregory', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "ck_bikeride_caregory",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "ck_bikeride_caregory", array( "ck_bikerides" ), $args );

	/**
	 * Taxonomy: Years.
	 */

	$labels = array(
		"name" => __( "Years", "cykling" ),
		"singular_name" => __( "Year", "cykling" ),
	);

	$args = array(
		"label" => __( "Years", "cykling" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'ck_bikeride_year', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "ck_bikeride_year",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "ck_bikeride_year", array( "ck_bikerides" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

