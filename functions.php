<?php
/**
 * Maize functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maize
 */

if(!function_exists('maize_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function maize_setup() {
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus([
			'menu-left' => esc_html__('Left', 'maize'),
			'menu-right' => esc_html__('Right', 'maize'),
		]);
	}
endif;
add_action('after_setup_theme', 'maize_setup');

/**
 * Remove unused links from the admin menu bar
 */
function remove_admin_links() {
	// Posts
   remove_menu_page('edit.php');

   // Comments
   remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_admin_links'); 

/**
 * Enqueue scripts and styles.
 */
function maize_scripts() {
	wp_enqueue_style('maize-style', get_stylesheet_uri());
	
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', [], NULL, TRUE);
	wp_enqueue_script('tweenlite', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenLite.min.js', [], NULL, TRUE);
	wp_enqueue_script('matchheight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', [], NULL, TRUE);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], NULL, TRUE);
}
add_action('wp_enqueue_scripts', 'maize_scripts');


// Helper function to print array data
function dprint($var) {
	$whitelist = [
		'::1',
		'127.0.0.1',
	];

	if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
		print '<pre>';
		print_r($var);
		print '</pre>';
	}
}