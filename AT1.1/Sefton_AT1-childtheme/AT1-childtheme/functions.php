<?php

if ( ! isset ( $content_width) ) {
	$content_width = 800;
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

	$parent_style = 'parent-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}

// registering menus
register_nav_menus( array(
	'primary'   => __( 'Primary Menu', 'mychildtheme' ),
	'thing' => __( 'Thing', 'mychildtheme' )
) );

// creating new widget area
function mychildtheme_widget_init() {

	register_sidebar( array(
		'name'=> 'ben widgets',
		'id' => 'my_new_widget_area',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',

	));
}

// adding new widget area
add_action( 'widgets_init','mychildtheme_widget_init' );
