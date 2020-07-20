<?php

function comet_theme_support() {
  // add dynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('menus');
  add_theme_support('widgets');
  
  //custom image sizes
  add_image_size('blog-large', 800, 400, false);
  add_image_size('blog-small', 160, 100, true);
}
add_action( 'after_setup_theme', 'comet_theme_support');


function comet_register_styles() {
  wp_enqueue_style(
    'comet-bootstrap',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',
    array(),
    '4.5.0',
    'all'
  );
  wp_enqueue_style(
    'comet-style',
    get_template_directory_uri() . '/style.css',
    array(),
    '1.0.0',
    'all'
  );
}
add_action('wp_enqueue_scripts', 'comet_register_styles');

function comet_register_scripts() {
  wp_enqueue_script(
    'comet-jquery',
    'https://code.jquery.com/jquery-3.5.1.slim.min.js',
    array(),
    '3.5.1',
    true
  );

  wp_enqueue_script(
    'comet-popper',
    'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
    array(),
    '1.16.0',
    true
  );

  wp_enqueue_script(
    'comet-bootstrapjs',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js',
    array(),
    '4.5.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'comet_register_scripts');

// menus
register_nav_menus(
  array(
  'main-menu' => 'Main Menu Location',
  'mobile-menu' => 'Mobile Menu Location'
  )
);

?>
