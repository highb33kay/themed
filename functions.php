<?php

function themed_reg_styles()
{
    wp_enqueue_style(
        'themed',
        get_template_directory_uri() . '/style.css',
        [],
        '1.0',
        'all'
    );
}

add_action('wp_enqueue_scripts', 'themed_reg_styles');

?>
