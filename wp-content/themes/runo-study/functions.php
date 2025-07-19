<?php

function runo_study_register_styles() {
    wp_enqueue_style( 'runo-study-style', get_template_directory_uri() . "/style.css", array(), wp_get_theme()->get('Version'), 'all');
}

add_action( 'wp_enqueue_scripts', 'runo_study_register_styles' );
?>