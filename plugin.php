<?php
/*
Plugin Name:	Map Test
Description:	Maplibre test
Version:		1.0.0
Author:			David Browne
*/


if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Register map element
 */
add_action( 'init', function() {
   \Bricks\Elements::register_element( __DIR__ . '/components/map.php' );
}, 11 );


add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('x-maplibre-css', 'https://unpkg.com/maplibre-gl@^5.3.0/dist/maplibre-gl.css', [], '1.0.0');
  wp_enqueue_style('x-map-css', plugin_dir_url( __FILE__ ) . 'components/assets/css/map.css', [], '1.0.0'); 
}); 