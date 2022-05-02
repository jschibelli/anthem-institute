<?php
/**
 * All linked files that are needed for the "header.php" are called in this funtion.
 * DO NOT place JS files here.
 */
function institute_files() {

  // Fonts
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

  // Stylesheets
  wp_enqueue_style('institute_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('institute_extra_styles', get_theme_file_uri('/build/index.css'));

}

add_action('wp_enqueue_scripts', 'institute_files');