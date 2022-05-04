<?php
function institute_post_types() {

  // Events Post Type
  register_post_type('event', array(
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items '=> 'All Events',
      'singular_name'=> 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Program Post Type
  register_post_type('program', array(
    'supports' => array('title', 'editor', 'author', 'thumbnail'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items ' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards'
  ));
}

add_action('init', 'institute_post_types');


?>