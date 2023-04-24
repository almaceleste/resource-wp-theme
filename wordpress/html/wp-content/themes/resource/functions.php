<?php

    // actions
    add_action( 'after_setup_theme', 'resource_support' );
    add_action( 'after_setup_theme', 'resource_nav_menus' );
    add_action( 'widgets_init', 'resource_sidebars' );
    add_action( 'wp_enqueue_scripts', 'resource_styles' );
    add_action( 'wp_footer', 'resource_scripts' );
    add_action( 'after_setup_theme', 'resource_textdomain' );

    // filters
    add_filter( 'document_title_separator', 'resource_title_separator' );
    add_filter( 'gettext', 'resource_locale_fallback', 10, 3);

    // functions
    function resource_locale_fallback($translation, $text, $domain) {
        // global $locale;
        $locale = determine_locale();
        if ($locale != 'en_US') {
            if ($translation == '' or $translation == $text) {
                $mo = new MO;
                $mofile = get_template_directory().'/languages/en_US.mo';
                $mo->import_from_file( $mofile );
                $translation = $mo->translate($text);
            }
        }
        return $translation;
    }

    function resource_nav_menus() {
        register_nav_menus( [
            'header_menu'   => __('Header menu', 'resource'),
            'footer_menu'   => __('Footer menu', 'resource')
        ] );
    }

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

    function resource_textdomain() {
        load_theme_textdomain('resource', get_template_directory() . '/languages');
    }

    function resource_title_separator($separator) {
        $separator = '|';
        return $separator;
    }

?>