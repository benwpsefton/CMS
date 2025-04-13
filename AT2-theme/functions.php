<?php

// ENQUEUE STYLE
function add_theme_style() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style2.css',false,'1.1','all');
}
add_action( 'wp_enqueue_scripts', 'add_theme_style' );
// ----------------

// ENQUEUE SCRIPT
function add_theme_script() {
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        NULL,
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'add_theme_script');
// ----------------

// DYNAMIC POST TITLES
function post_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'post_support');

// CUSTOM FUNCTION FOR FAVICON
function add_favicon() {
	echo '<link rel="icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.ico?v=2" />';
}

add_action('wp_head', 'add_favicon');
// ----------------

// MENU FUNCTION
function my_custom_menu() {
    register_nav_menus(
        array(
            'my-custom-menu' => _( 'My Custom Menu' )));
}
add_action( 'init', 'my_custom_menu' );
// ----------------

// WIDGET FUNCTION
function new_widgets_init() {

    register_sidebar( array(
        'name'          => 'header widgets',
        'class'         => 'custom-header-widget',
        'id'            => 'custom-header-widget',
        'before_widget' => '<aside>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}

add_action( 'widgets_init', 'new_widgets_init' );

function more_widgets_init() {

    register_sidebar( array(
        'name' => 'more widgets',
        'class' => 'more-widgets',
        'id' => 'more-widgets',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action( 'widgets_init', 'more_widgets_init' );
// ----------------