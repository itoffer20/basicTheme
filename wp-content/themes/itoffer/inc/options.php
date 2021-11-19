<?php
defined('ABSPATH') || exit();

// Add ACF options pages
if (function_exists('acf_add_options_page')) {
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'basrah-general-settings',
		'capability'	=> 'edit_posts',
		'redirect' 		=> true
	));
}
