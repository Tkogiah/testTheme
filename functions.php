<?php

//adding the CSS and JS files

function theme_setup(){
  
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');

  // SYNTAX *******  5 PARAMS
  //wp_enqueue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' )
  
  //SYNTAX EXPLANATION ******
  /*
   https://developer.wordpress.org/reference/functions/wp_enqueue_style/
  */
  
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

// SYNTAX *******  5 PARAMS
  //wp_enqueue_script( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
  
  //SYNTAX EXPLANATION ******
  /*
   https://developer.wordpress.org/reference/functions/wp_enqueue_script/
  */

}

add_action('wp_enqueue_scripts', 'theme_setup');

//adding theme support

function theme_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'theme_init');


//projects post type

function theme_custom_post_type() {
    register_post_type('project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Projetc',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon'
        )
    )
}



?>
