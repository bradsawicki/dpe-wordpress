<?php
add_action( 'after_setup_theme', 'dpe_setup' );
function dpe_setup() {
	load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'wp_enqueue_scripts', 'dpe_load_scripts' );
function dpe_load_scripts() {
	wp_enqueue_script( 'jquery' );
}

add_filter( 'the_title', 'dpe_title' );
function dpe_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

add_filter( 'wp_title', 'dpe_filter_wp_title' );
function dpe_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

// Image Sizes
add_image_size( 'team-thumb', 278, 278, true );
add_image_size( 'team-thumb-2x', 556, 556, true );

add_image_size( 'footer-profile-thumb', 144, 144, true );
add_image_size( 'footer-profile-thumb-2x', 288, 288, true );

// ACF Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Remove Ninja Form Sylesheets
function wpgood_nf_display_enqueue_scripts(){
	wp_dequeue_style( 'nf-display' );
}
add_action( 'nf_display_enqueue_scripts', 'wpgood_nf_display_enqueue_scripts');
