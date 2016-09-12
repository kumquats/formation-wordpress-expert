<?php
/**
 * Activation du thème enfant
 *
 * @package Formation Expert Wordpress
 **/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
 * Set the child package
 */
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

