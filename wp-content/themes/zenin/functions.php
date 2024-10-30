<?php
/**
 * Theme Funtions 
 * 
 *  @package Zenin
 */

 /* get_template_directory_uri() = gets the absolute path till the current theme */
 /* get_stylesheet_uri() = gets the absolute path till the current themes stylesheet */
 /* wp_register_styleshet() = registers the stylesheet for enqueue it later or conditional rendering */

if ( ! defined( 'ZENIN_DIR_PATH' ) ) {
  define( 'ZENIN_DIR_PATH' , untrailingslashit( get_template_directory() ) );
}
if ( ! defined( 'ZENIN_DIR_URI' ) ) {
  define( 'ZENIN_DIR_URI' , untrailingslashit( get_template_directory_uri() ) );
}

require_once ZENIN_DIR_PATH . '/inc/helpers/autoloader.php';
// require_once ZENIN_DIR_PATH . '/inc/classes/class_zenin_theme.php';

function get_zenin_theme_instance() {
  \ZENIN_THEME\Inc\ZENIN_THEME::get_instance();
}

get_zenin_theme_instance();

function zenin_enqueue_scripts() {
  wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
  wp_register_script( 'main-js', get_template_directory_uri() . '/asset/main.js', [], filemtime( get_template_directory() . '/asset/main.js' ) , true );
  wp_register_style( "tailwind-css", get_stylesheet_directory_uri() . '/tailwind-output.css', [], filemtime( get_template_directory() . '/tailwind-output.css' ), 'all' );

  wp_enqueue_style( 'style-css' );
  wp_enqueue_script( 'main-js' );
  wp_enqueue_style( 'tailwind-css' );
}

add_action( 'wp_enqueue_scripts' , 'zenin_enqueue_scripts' );

?>