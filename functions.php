<?php

//	// Enable thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'single-thumbnail', 800, 370, FALSE );

if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( [
		'name'          => 'گوشه',
		'id'            => 'publication',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	] );
}

//remove widget title
//add_filter( 'widget_title', 'remove_widget_title' );
//function remove_widget_title( $widget_title ) {
//
//	return;
//}

//wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/main.js', array ( 'jquery' ), 1.1, true);


function theme_styles(){
    /*
     * This if() statement is unnecessary, as wp_enqueue_scripts
     * doesn't fire on the admin pages.
     * if( is_admin() ) {
     *   return;
     * }
     */
    wp_enqueue_style(
        'theme-styles',
        get_stylesheet_uri(),
        array(),
        false,
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );