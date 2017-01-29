<?php

/**
 * Enqueue scripts and styles.
 */
function primoz_enqueue_styles() {
	wp_enqueue_style( 'parent-theme-style', get_template_directory_uri() . '/style.css', array( 'dashicons' ) );
}
add_action( 'wp_enqueue_scripts', 'primoz_enqueue_styles' );