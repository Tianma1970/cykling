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
 * include font-awesome
 */

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
