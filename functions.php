<?php

//adding the CSS and JS files

function theme_setup(){
  //wp_enqueue_style('google-fonts', URL);
  //wp_enqueue_style('fontawesome', URL);  
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'theme_setup');
?>