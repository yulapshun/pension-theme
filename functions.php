<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function unregister_widgets() {

    // Unregister some of the TwentyTen sidebars
    unregister_sidebar( 'sidebar-1' );
    unregister_sidebar( 'sidebar-2' );
    unregister_sidebar( 'sidebar-3' );
}

add_action( 'widgets_init', 'unregister_widgets', 11 );
?>