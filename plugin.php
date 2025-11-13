<?php
/*
Plugin Name: Hello From My Plugin
Description: Puts "Hello from my plugin" into the admin bar where Hello, Dolly normally shows quotes.
Version: 0.1
Author: You
Text Domain: hfmp
*/

add_action( 'init', function() {
} );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Replace Hello Dolly's node (if present) and add our own in the admin bar. */
add_action( 'admin_bar_menu', function( $wp_admin_bar ) {
	// only run when the admin bar is actually showing
	if ( ! is_admin_bar_showing() ) {
		return;
	}

	// if Hello Dolly exists, remove it so our string takes the same id/position
	$wp_admin_bar->remove_node( 'hello-dolly' );

	// add a simple, non-linked text node
	$wp_admin_bar->add_node( [
		'id'    => 'hello-dolly', // reuse the same id so placement mirrors Hello Dolly
		'title' => __( 'Hello from my plugin', 'hfmp' ),
		'href'  => false,
		'meta'  => [
			'class' => 'hfmp-hello ab-item',
			'title' => __( 'Hello from my plugin', 'hfmp' ),
		],
	] );
}, 999 );
