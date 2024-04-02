<?php
/**
 * CorporateCrafter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage CorporateCrafter
 * @since CorporateCrafter 1.0
 */


function corporatecrafter_theme_scripts() {
    // Enqueue theme stylesheet for the front-end.
    wp_enqueue_style('corporatecrafter-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('corporatecrafter-main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('corporatecrafter-sticky', get_stylesheet_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );   
	
    
}

add_action( 'wp_enqueue_scripts', 'corporatecrafter_theme_scripts' );
add_editor_style( 'style.css' ); // Add this line to enqueue the editor style.

// register own theme pattern

function corporatecrafter_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'corporatecrafter' => array( 'label' => __( 'CorporateCrafter', 'corporatecrafter' ) )
	);

	$block_pattern_categories = apply_filters( 'corporatecrafter_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'corporatecrafter_register_pattern_category');




