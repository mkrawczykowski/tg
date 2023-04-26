<?php

  function my_scripts(){
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/dist/style.min.css');
    wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/dist/scripts.min.js');
  }
  
  add_action('wp_enqueue_scripts', 'my_scripts');