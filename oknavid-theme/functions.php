<?php
add_action( 'wp_enqueue_scripts', 'okna_style');
add_action( 'wp_enqueue_scripts', 'okna_scripts');
add_action( 'after_setup_theme', 'myMenu');


function myMenu(){
    register_nav_menu( 'top-menu', 'Меню в шапке' );
    register_nav_menu( 'bottom-menu', 'Меню в подвале' );
}

function okna_style(){
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');  
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');  
    wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function okna_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() .'/assets/js/slick.min.js'); 
    wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/main.js', array(jquery), 'null', true );
}  




