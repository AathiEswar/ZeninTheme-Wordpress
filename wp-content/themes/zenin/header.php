<?php
/**
 * Header file 
 * 
 * @package Zenin
 * 
 */
?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?> ">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  //helps to fire up the external scripts and styles for wordpress themes
  wp_head(); ?>
</head>

<body 
  <?php 
    //adds class to the body tag
    body_class() 
    ?> 
  >

  <?php 
    //hook for adding scripts at the start of the body
    if( function_exists( 'wp_body_open' ) ) {
      wp_body_open(); 
    }
  ?>

  <header class="bg-green-600">
    This is header
    <?php get_template_part( '\template-parts\header\nav' ); ?>
  </header>