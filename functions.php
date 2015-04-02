<?php

// Function for CSS
function theme_styles() {

	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick_theme_css', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// Function for JS
function theme_js() {

	wp_enqueue_script( 'foundation_js', get_bloginfo( 'template_directory' ) . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'slick_js', get_bloginfo( 'template_directory' ) . '/js/slick.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_bloginfo( 'template_directory' ) . '/js/main.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// WP admin configuration
add_filter( 'show_admin_bar', '__return_false' );


// Function for creating Menus
add_theme_support( 'menus' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'nav-top-bar'	=> __( 'Navigation top bar' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );


function add_menuclass($ulclass) {
return preg_replace('/<a rel="buttonlink"/', '<a class="button"', $ulclass, 1);
}
add_filter('wp_nav_menu','add_menuclass');


class My_Sub_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown\">\n";
  }
  function end_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
}



// Function for creating Widegets
function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

// Create widgets 
create_widget("Startseite Kurzbeschreibung", "front-description", "Wird auf der Startseite links unten angezeigt.");
create_widget("Startseite Nächste Termine", "front-calendar", "Wird auf der Startseite rechts unten angezeigt.");
create_widget("Footer Logos", "footer-logos", "Logobereich im Footer");



?>