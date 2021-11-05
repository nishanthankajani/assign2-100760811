<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

function technitwentytwentyonechild_wp_enqueue_scripts() {
  $parenthandle = 'technitwentytwentyonechild-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
  $theme = wp_get_theme();
  wp_enqueue_style(
    $parenthandle,
    get_template_directory_uri() . '/style.css', 
    array(), 
     $theme->parent()->get('Version')
   );
   wp_enqueue_style( 
    'technitwentytwentyonechild-style', 
    get_stylesheet_uri(),
    array( $parenthandle ),
    $theme->get('Version') 
);
}
add_action( 'wp_enqueue_scripts', 'technitwentytwentyonechild_wp_enqueue_scripts' );
