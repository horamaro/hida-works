<?php

function hida_works_enqueue_styles() {
    wp_enqueue_style(
        'hida_works_style',
        get_template_directory_uri().'/assets/css/common.css',
    );
}

add_action(
    'wp_enqueue_scripts',
    'hida_works_enqueue_styles'
);

