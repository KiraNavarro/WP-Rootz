<?php 
// Register Custom Navigation Walker
require_once 'wp-bootstrap-navwalker.php';

// Theme Support 
function wpr_theme_setup(){
	
	add_theme_support('post-thumbnails');
	
	// Nav Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
}

add_action('after_setup_theme', 'wpr_theme_setup');

// Customizer File 
//require 'inc/customizer.php';

// Remove Theme Editor
function remove_editor_menu() {
	remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'remove_editor_menu', 1);
?>