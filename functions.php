<?php 
// Connect to the stylesheets
function hintermann_files() {
    wp_enqueue_script('hintermann-js', get_theme_file_uri('./build/index.js'), array(), '1.0', true);
    wp_enqueue_style('hintermann-css', get_theme_file_uri('./build/style-index.css'));
}
add_action( 'wp_enqueue_scripts', 'hintermann_files' );

// Add additional support to the theme
function hintermann_features() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'hintermann_features' );

function remove_unwanted_scripts_and_styles() {
    wp_deregister_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'remove_unwanted_scripts_and_styles');

?>