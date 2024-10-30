<?php

/**
 * ZENIN CLASS ASSETS
 * 
 * @package Zenin
 */

namespace ZENIN_THEME\Inc;

use ZENIN_THEME\Inc\Traits\Singleton;

class Assets
{
  use Singleton;

  protected function __construct()
  {
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    add_action('wp_enqueue_styles', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }
  public function register_styles()
  {
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(ZENIN_DIR_PATH . '/style.css'), 'all');
    wp_register_style("tailwind-css", get_stylesheet_directory_uri() . '/tailwind-output.css', [], filemtime(ZENIN_DIR_PATH . '/tailwind-output.css'), 'all');

    wp_enqueue_style('style-css');
    wp_enqueue_style('tailwind-css');
  }
  public function register_scripts()
  {
    wp_register_script('main-js', ZENIN_DIR_URI . '/asset/main.js', [], filemtime(ZENIN_DIR_PATH . '/asset/main.js'), true);
    wp_enqueue_script('main-js');
  }
}
