<?php
function add_theme_styles() {

    wp_enqueue_style( 'style-lineunicons', 'https://unicons.iconscout.com/release/v3.0.1/css/line.css');
    wp_enqueue_style( 'style-swiper', get_template_directory_uri().'/assets/css/swiper-bundle.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/styles.css');
    
    
    wp_enqueue_script( 'script-swiper', get_stylesheet_directory_uri().'/assets/js/swiper-bundle.min.js', NULL, '1.0', true );
    wp_enqueue_script( 'script-main', get_stylesheet_directory_uri(). '/assets/js/main.js', NULL, '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

