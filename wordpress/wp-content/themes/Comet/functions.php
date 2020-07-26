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

// register sidebars
function comet_sidebars() {
  // front page widgets
  register_sidebar(
    array(
      'name' => 'Front Page: Intro',
      'id' => 'front-page-intro',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Front Page: Pic',
      'id' => 'front-page-pic',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Front Page: Social Media',
      'id' => 'front-page-social',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Front Page: Projects',
      'id' => 'front-page-projects',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Front Page: Skills',
      'id' => 'front-page-skills',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Front Page: Hobbies',
      'id' => 'front-page-hobbies',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'name' => 'Page Sidebar',
      'id' => 'page-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Blog Sidebar',
      'id' => 'blog-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Blog Page Sidebar',
      'id' => 'blog-page-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
}
add_action('widgets_init', 'comet_sidebars');

/* custom post type project */
function comet_project_post_type() {
  $args = array(
    'labels' => array(
      'name' => 'Projects',
      'singular' => 'Project',
    ),
    'menu_icon' => 'dashicons-portfolio',
    'hierarchical' => false,
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
  );
  register_post_type( 'project', $args );
}
add_action('init', 'comet_project_post_type');;

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
