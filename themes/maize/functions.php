<?php
/**
 * Maize functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Maize
 */


require_once get_theme_file_path( 'inc/acf-options-page.php' );


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
	wp_enqueue_script('validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js', [], NULL, TRUE);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], NULL, TRUE);

	// Declare global variables for use with ajax script
	wp_localize_script('main', 'global_vars_array', ['ajaxurl' => admin_url('admin-ajax.php')]);
}
add_action('wp_enqueue_scripts', 'maize_scripts');


/**
 * Remove special characters from string and convert to lowercase
 */
function string_to_id($string) {
	if(!isset($string) || empty($string)) return '';

	// remove special chars
	$id = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $string);

	// remove white space
	$id = str_replace(' ', '', $id);

	// convert to lowercase
	$id = strtolower($id);

	return $id;
}

function submit_order_form_ajax() {

	// see if data was submitted
	if(!empty($_POST)) {

		// not sure how to prevent the double serialization
		// so parsing the query string into an array
		parse_str($_POST['query'], $query);

		if(!empty($query)) {

			// set email vars
			$email_recipient = $query['recipient'];
			// $email_recipient = 'junie@what.it.is';
			$email_subject = 'New Order';

			// get user email address
			if(isset($query['email'])) {
				$email_sender = $query['email'];
			} else {
				$email_sender = $email_recipient;
			}

			// create first part of email to send
			$email = '';
			$email .= 'First Name: ' . $query['first-name'] . "\r\n";
			$email .= 'Last Name: ' . $query['last-name'] . "\r\n";
			$email .= 'Email Address: ' . $query['email'] . "\r\n";
			$email .= 'Phone Number: ' . $query['phone-number'] . "\r\n";
			$email .= 'Street Address: ' . $query['address'] . "\r\n";
			$email .= 'Zip Code: ' . $query['zipcode'] . "\r\n";
			$email .= "\r\n";
			$email .= 'Order Details: ' . "\r\n";
			$email .= 'Date: ' . $query['date'] . "\r\n";
			$email .= 'Time: ' . $query['time'] . "\r\n";
			$email .= "\r\n";

			// the cookie/product names are editable within wordpress so we don't know what they will be
			// going to unset all data from $query and then strip out the underscores in the remaining keys
			unset($query['first-name']);
			unset($query['last-name']);
			unset($query['email']);
			unset($query['phone-number']);
			unset($query['address']);
			unset($query['zipcode']);
			unset($query['date']);
			unset($query['time']);
			unset($query['recipient']);

			// loop through remaining keys and if their value is not 0, add them to the email
			// will produce something like 'Cookie Name: 3'
			foreach($query as $key => $value) {
				if($value !== '0') {
					$cookie = str_replace('_', ' ', $key);
					$email .= $cookie . ': ' . $value . " dozen\r\n";
				}
			}

			// send the email
			mail($recipient_email, $email_subject, $email);

			// set response data for js
			$response = ['success' => 'success!', 'email' => $email];

			// echo response as json
			echo json_encode($response);

			die();
		}

		// error
		// we weren't able to parse the query string
		echo json_encode(['error' => 'No form data']);

		die();
	}

	// error
	// we didn't get any post data
	echo json_encode(['error' => 'No post data']);

	die();
}
add_action('wp_ajax_nopriv_submit_order_form_ajax', 'submit_order_form_ajax');
add_action('wp_ajax_submit_order_form_ajax', 'submit_order_form_ajax');


// Helper function to print array data
// Only works on localhost to prevent unwanted data appearing on a live site
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
