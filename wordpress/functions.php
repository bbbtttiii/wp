<?php
function register_nav() {
  register_nav_menus (
    array(
      'header' => 'Header'
    )
  );

  register_nav_menus (
    array(
      'footer' => 'Footer'
    )
  );
    
  register_nav_menus (
    array(
      '404' => '404'
    )
  );
}

if (! function_exists('setup')):
  function setup() {
    register_nav();
    add_theme_support('post-thumbnails');
    add_image_size('team', 475, 475, array('center', 'center'));  //set thumnail properties
  }
endif;

function scripts_header() {
  wp_enqueue_style('init', get_stylesheet_uri()); //load css
}

function scripts_footer() {
  // wp_enqueue_script('init', get_template_directory_uri().'/js/init.js', array('jquery')); //load js
}

add_action('after_setup_theme', 'setup'); //once theme is initialized, pulls functions
add_action('wp_enqueue_scripts', 'scripts_header');
// add_action('wp_footer', 'scripts_footer');