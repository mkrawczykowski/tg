<?php
  wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/dist/css/style.min.css', array());
  wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/dist/main.min.js', array('jquery'), '1.0', true);
?>