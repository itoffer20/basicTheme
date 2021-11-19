<?php
/**
 * Enqueue scripts and styles.
 */
function itoffer_scripts() {
	wp_enqueue_style( 'itoffer-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'itoffer-style', 'rtl', 'replace' );

	wp_enqueue_script( 'itoffer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'itoffer_scripts' );