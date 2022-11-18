<?php

// custom posts types
function cpt_podcasts() {
    register_post_type( 'podcast',
    // CPT Options
    
    array(
      'labels' => array(
       'name' => __( 'Podcasts' ),
       'singular_name' => __( 'Podcast' )
      ),
      'public' => true,
      'has_archive' => false,
      'show_in_graphql' => true,
      'graphql_single_name' => 'Podcast', 
      'graphql_plural_name' => 'Podcasts',
      'menu_icon' => 'dashicons-playlist-audio',
      'rewrite' => array('slug' => 'podcasts'),
      'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
      'taxonomies'  => array( 'category','post_tag' )
     )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'cpt_podcasts' );


if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_6375b0600b338',
    'title' => 'Podcast',
    'fields' => array(
      array(
        'key' => 'field_6375b0dd2cd97',
        'label' => 'New Episode?',
        'name' => 'new_episode',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'show_in_graphql' => 1,
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_6375b1fed3969',
        'label' => 'Listen On',
        'name' => 'listen_on',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'show_in_graphql' => 1,
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_6375b22bd396a',
            'label' => 'Spotify',
            'name' => 'spotify',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'placeholder' => '',
          ),
          array(
            'key' => 'field_6375b245d396b',
            'label' => 'Google Podcasts',
            'name' => 'google_podcasts',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'placeholder' => '',
          ),
          array(
            'key' => 'field_6375b251d396c',
            'label' => 'Apple Podcasts',
            'name' => 'apple_podcasts',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'placeholder' => '',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'podcast',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 1,
    'show_in_graphql' => 1,
    'graphql_field_name' => 'podcastAcf',
    'map_graphql_types_from_location_rules' => 0,
    'graphql_types' => '',
  ));
  
  endif;		
