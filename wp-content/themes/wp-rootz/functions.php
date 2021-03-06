<?php 
//Load STYLES
wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css',false,'1.1','all');


// Register Custom Navigation Walker
require_once 'wp-bootstrap-navwalker.php';

// Theme Support 
function wpr_theme_setup(){
	// Post Thumbnails (Featured Image)
	add_theme_support('post-thumbnails');
	
	// Nav Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
}

add_action('after_setup_theme', 'wpr_theme_setup');

// Customizer File 
require 'inc/customizer.php';

// Remove Theme Editor
function remove_editor_menu() {
	remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'remove_editor_menu', 1);

// Excerpt lenght

function set_excerpt_lenght(){
	return 20;
}

add_filter('excerpt_length', 'set_excerpt_lenght');

// Widget Locations
function wpr_init_widgets( $id ) {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id'   => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	) );
	register_sidebar( array(
		'name' => 'Box1',
		'id'   => 'box1',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => 'Box2',
		'id'   => 'box2',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => 'Box3',
		'id'   => 'box3',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
}

add_action('widgets_init', 'wpr_init_widgets');

?>