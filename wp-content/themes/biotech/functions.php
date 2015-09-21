<?php

add_theme_support( 'post-thumbnails' );

function droptech_theme_styles(){

    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/font/font-awesome.css' );
    wp_enqueue_style( 'dropstyles', get_template_directory_uri() . '/css/dropstyles.css' );
//      PUT THE GOOGLE FONT LINKS IN A SCSS FILE        ////
}

add_action( 'wp_enqueue_scripts', 'droptech_theme_styles');

function droptech_theme_scripts(){

    wp_enqueue_script( 'dropscripts', get_template_directory_uri() . '/js/min/dropscripts-min.js', array ('jquery'), '', true );

}

add_action('wp_enqueue_scripts', 'droptech_theme_scripts')

?>
