<?php
/**
 * All linked files that are needed for the "header.php"
 * are called in this funtion.
 */
function institute_files() {

  // Fonts
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

  // Stylesheets
  wp_enqueue_style('institute_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('institute_extra_styles', get_theme_file_uri('/build/index.css'));

  // Scripts
  wp_enqueue_script('institute_extra_scripts', get_theme_file_uri('/build/index.js'), array('jquery') , '1.0', true);
  wp_enqueue_script('hero-slider', get_theme_file_uri('/src/modules/HeroSlider.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'institute_files');

function institute_features() {
  add_theme_support('title-tag');

  //Menu Locations
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerColumnTwo', 'Footer Column Two');
  register_nav_menu('footerColumnThree', 'Footer Column Three');
}

add_action('after_setup_theme', 'institute_features');