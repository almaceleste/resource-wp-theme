<?php

    // actions
    add_action( 'after_setup_theme', 'theme_support' );
    add_action( 'wp_enqueue_scripts', 'load_styles' );
    add_action( 'wp_footer', 'load_scripts' );

    // filters
    add_filter( 'document_title_separator', 'change_title_separator' );

    // functions
    function change_title_separator($separator) {
        $separator = '|';
        return $separator;
    }

    function load_scripts() {}

    function load_styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'default', get_template_directory_uri() . '/css/default.css' );
    }

    function theme_support() {
        add_theme_support( 'custom-logo', array(
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
        add_theme_support( 'title-tag' );
    }

?>