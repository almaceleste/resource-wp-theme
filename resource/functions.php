<?php
    // variables
    $language_default = 'en_US';

    // actions
    add_action( 'after_setup_theme', 'resource_support' );
    add_action( 'after_setup_theme', 'resource_nav_menus' );
    add_action( 'init', 'resource_locale_init' );
    add_action( 'widgets_init', 'resource_sidebars' );
    add_action( 'wp_enqueue_scripts', 'resource_styles' );
    add_action( 'wp_footer', 'resource_scripts' );
    add_action( 'after_setup_theme', 'resource_textdomain' );

    // filters
    add_filter( 'document_title_separator', 'resource_title_separator' );
    add_filter( 'locale', 'resource_locale', 10, 1 );
    add_filter( 'gettext', 'resource_locale_fallback', 10, 3 );

    // functions
    function resource_locale() {
        $language = resource_locale_get();
        return $language;
    }

    function resource_locale_get() {
        $langs = array(
            'de' => 'de_DE',
            'en' => 'en_US',
            'ru' => 'ru_RU',
        );

        if (isset($_GET['l']) && isset($languages[$_GET['l']])) {
            $language = $_GET['l'];
        }
        else {
            if (isset($_GET['lang']) && isset($langs[$_GET['lang']])) {
                $lang = $_GET['lang'];
                $language = $langs[$lang];
            }
            else
                $language = resource_locale_cookie_get();
        }

        return $language;
    }

    function resource_locale_init() {
        $language = resource_locale_get();
        resource_locale_cookie_set($language);
    }

    function resource_locale_cookie_get() {
        global $language_default;
        $language = isset( $_COOKIE['language'] ) ? $_COOKIE['language'] : $language_default;
        return $language;
    }

    function resource_locale_cookie_set($language) {
        setcookie('language', $language, time()+60*60*24*7, '/');
    }

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
        wp_enqueue_style( 'languages', get_template_directory_uri() . '/css/languages.css' );
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