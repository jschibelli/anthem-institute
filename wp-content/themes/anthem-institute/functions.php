<?php
/**
 * All linked files that are needed for the "header.php" are called in this funtion.
 * DO NOT place JS files here.
 */
function institute_files() {
  wp_enqueue_style('institute_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'institute_files');