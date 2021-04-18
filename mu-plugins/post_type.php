<?php 
# create new post type 
function post_types(){
  //Event post type 
  register_post_type('event',array(
    'supports'=> array('title','editor','excerpt','custom-fields'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name '=> 'Events'

    ),
    'menu_icon' => 'dashicons-calendar'
  ));
  //Program post type 
  register_post_type('program',array(
    'supports'=> array('title','editor'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Program',
      'singular_name '=> 'Programs'

    ),
    'menu_icon' => 'dashicons-smiley'
  ));
  //Professor post type 
  register_post_type('professor',array(
    'supports'=> array('title','editor','thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professor',
      'singular_name '=> 'Professors'

    ),
    'menu_icon' => 'dashicons-groups'
  ));
}
add_action('init','post_types');
