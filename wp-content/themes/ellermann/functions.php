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

add_action( 'widgets_init', 'dpe_widgets_init' );
function dpe_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'blankslate' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
