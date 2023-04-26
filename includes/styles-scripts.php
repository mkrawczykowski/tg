<?php
  // function enqueue_style_scripts() {
  //   wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/dist/style.min.css', array());
  //   // wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/style.min.css', array(), false, true);
  //   // wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/dist/scripts.min.js', array(), false, true);
  // }

  // add_action( 'wp_enqueue_scripts', 'enqueue_style_scripts' );

  function my_scripts(){
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/dist/style.min.css', array());

  }
  add_action('wp_enqueue_scripts', 'my_scripts');
?>