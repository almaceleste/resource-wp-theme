<?php

    // actions
    add_action( 'after_setup_theme', 'resource_support' );
    add_action( 'widgets_init', 'resource_sidebars' );
    add_action( 'wp_enqueue_scripts', 'resource_styles' );
    add_action( 'wp_footer', 'resource_scripts' );

    // filters
    add_filter( 'document_title_separator', 'resource_title_separator' );

    // functions
    function resource_scripts() {}

    function resource_sidebars() {
        register_sidebar( array(
            'name'  => 'Main Sidebar',
            'id'    => 'sidebar-main',
            'description'   => 'Sidebar for the widgets',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>'
        ) );
    }

    function resource_styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'default', get_template_directory_uri() . '/css/default.css' );
    }

    function resource_support() {
        add_theme_support( 'custom-logo', array(
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
        add_theme_support( 'title-tag' );
    }

    function resource_title_separator($separator) {
        $separator = '|';
        return $separator;
    }

?>