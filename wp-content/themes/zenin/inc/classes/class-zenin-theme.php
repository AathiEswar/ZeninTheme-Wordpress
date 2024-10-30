<?php

/**
 * ZENIN THEME CLASSES
 * 
 * @package Zenin
 */

namespace ZENIN_THEME\Inc;

use ZENIN_THEME\Inc\Traits\Singleton;

class ZENIN_THEME
{
  use Singleton;

  protected function __construct()
  {
    Assets::get_instance();
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    add_action('after_setup_theme', [$this, 'setup_theme']);
  }
  public function setup_theme()
  {
    // dynamic title of the website 
    add_theme_support('title-tag');

    // dynamic logo
    add_theme_support('custom-logo', [
      'header-text'          => array('site-title', 'site-description'),
      'height'               => 20,
      'width'                => 20,
      'flex-height'          => true,
      'flex-width'           => true,
    ]);

    // background image for the theme
    add_theme_support('custom-background', [
      'default-color' => '0000ff',
      'default-image' => '',
    ]);
    // preview image in post
    add_theme_support( 'post-thumbnails' );

    // add_theme_support( 'customize-selective-refresh-widgets' );
    // add_theme_support( 'automatic-feed-links' );

    // // converts to html markup format
    // add_theme_support(
    //   'html' ,
    //   [
    //     'search-form',
    //     'comment-form',
    //     'comment-list',
    //     'gallery',
    //     'style',
    //     'script',
    //     'caption'
    //   ]
    //   );
    //   // custom style sheet
    //   add_editor_style();

    //   add_theme_support( 'wp-blog-styles' );
    //   add_theme_support( 'align-wide' );
  }
}
