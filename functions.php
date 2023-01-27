<?php

function themed_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'themed_theme_support');

function themed_reg_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'themed',
        get_template_directory_uri() . '/style.css',
        ['themed_bootstrap'],
        $version,
        'all'
    );

    wp_enqueue_style(
        'themed_bootstrap',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        [],
        $version,
        'all'
    );
    wp_enqueue_style(
        'themed_carusel',
        get_template_directory_uri() . '/assets/css/owl.carousel.min.css',
        [],
        $version,
        'all'
    );
    wp_enqueue_style(
        'themed_theme',
        get_template_directory_uri() . '/assets/css/owl.theme.default.min.css',
        [],
        $version,
        'all'
    );
    wp_enqueue_style(
        'themed_resp',
        get_template_directory_uri() . '/assets/css/responsive.css',
        [],
        $version,
        'all'
    );

    wp_enqueue_style(
        'themed_scroll',
        get_template_directory_uri() .
            '/assets/css/jquery.mCustomScrollbar.min.css',
        [],
        $version,
        'all'
    );

    wp_enqueue_style(
        'themed_bootstraped',
        'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css',
        [],
        $version,
        'all'
    );

    wp_enqueue_style(
        'themed_ajax',
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css',
        [],
        $version,
        'all'
    );

    wp_enqueue_style(
        'themed_google',
        'https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap',
        [],
        $version,
        'all'
    );
    wp_enqueue_style(
        'themed_ajax',
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css',
        [],
        $version,
        'all'
    );
}

add_action('wp_enqueue_scripts', 'themed_reg_styles');

function themed_reg_scripts()
{
    wp_enqueue_script(
        'themed_carousel_js',
        get_template_directory_uri() . '/assets/js/custom.js',
        [],
        1.0,
        true
    );

    wp_enqueue_script(
        'themed_jquery_js',
        get_template_directory_uri() . '/assets/js/jquery.min.js',
        [],
        1.0,
        true
    );

    wp_enqueue_script(
        'themed_popper_js',
        get_template_directory_uri() . '/assets/js/popper.min.js',
        [],
        1.0,
        true
    );

    wp_enqueue_script(
        'themed_bootstrap_js',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        [],
        1.0,
        true
    );

    wp_enqueue_script(
        'themed_jquery3_js',
        get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js',
        [],
        3.0,
        true
    );

    wp_enqueue_script(
        'themed_plugin_js',
        get_template_directory_uri() . '/assets/js/plugin.js',
        [],
        1.0,
        true
    );
    wp_enqueue_script(
        'themed_scroll_js',
        get_template_directory_uri() .
            '/assets/js/jquery.mCustomScrollbar.concat.min.js',
        [],
        1.0,
        true
    );
    wp_enqueue_script(
        'themed_owl_js',
        get_template_directory_uri() . '/assets/js/owl.carousel.js',
        [],
        1.0,
        true
    );
    wp_enqueue_script(
        'themed_fancybox_js',
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js',
        [],
        1.0,
        true
    );
}

add_action('wp_enqueue_scripts', 'themed_reg_scripts');

function themed_menu()
{
    $locations = [
        'primary' => 'Main',
        'footer' => 'Footer Menu Items',
    ];

    register_nav_menus($locations);
}

add_action('init', 'themed_menu');

?>
