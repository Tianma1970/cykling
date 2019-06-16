<?php

function ck_register_menues() {
    register_nav_menus([
        'main-menu' => 'Main Menu'
    ]);
}

add_action('init','ck_register_menues');


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
     //Page Sidebar Widget area
     register_sidebar([
        'name'          => 'Page Sidebar',
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