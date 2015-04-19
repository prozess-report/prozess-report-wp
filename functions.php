<?php

// Function for CSS
function theme_styles() {

	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// Function for JS

function theme_js() {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false );
 	  wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', false );
    wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '5.5.1', true );
    wp_register_script( 'init_js', get_template_directory_uri() . '/js/init.js', array( 'jquery' ), '', false );

    wp_enqueue_script( 'modernizr' );
    wp_enqueue_script( 'fastclick' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'foundation' );
  	wp_enqueue_script( 'init_js' );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );


// WP admin configuration
add_filter( 'show_admin_bar', '__return_false' );


// Function for creating Menus
add_theme_support( 'menus' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'nav-top-bar'	=> __( 'Navigation top bar' ),
			'front-page-subnav'	=>	__( 'Front Page Sub Menu' )
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


// custom menu example @ http://digwp.com/2011/11/html-formatting-custom-menus/
function front_page_submenu() {
    $menu_name = 'front-page-subnav';
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<dl class="sub-nav">'."\n".'<dt>aktuelle prozesse:</dt>'."\n";
        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= "\t\t\t\t\t". '<dd><a href="'. $url .'">'. $title .'</a></dd>' ."\n";
        }
        $menu_list .= "\t\t\t". '</dl>' ."\n";
    } else {
    }
    echo $menu_list;
}


// Function for creating Widgets
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

create_widget("Startseite Kurzbeschreibung", "front-description", "Wird auf der Startseite links unten angezeigt.");
create_widget("Startseite Nächste Termine", "front-calendar", "Wird auf der Startseite rechts unten angezeigt.");
create_widget("Footer Links", "footer-left", "Linker Bereich im Footer");
create_widget("Footer Mitte", "footer-center", "Mittlerer Bereich im Footer");
create_widget("Footer Rechts", "footer-right", "Rechter Bereich im Footer");
create_widget("Footer Logos", "footer-logos", "Logobereich im Footer");

?>
