<?php

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
    wp_enqueue_scripts(
        'themed_carusel_js',
        get_template_directory_uri() . '/assets/js/custom.js',
        [],
        1.0
    );
}

add_action('wp_enqueue_scripts', 'themed_reg_scripts');

?>
