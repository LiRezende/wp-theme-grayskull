<?php
function rg_theme_styles() {
    // CSS
    wp_enqueue_style('styles', get_template_directory_uri().'/assets/css/styles.css');

    // JS
    wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/scripts.js', false, true);
}

function rg_after_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');  
    register_nav_menu('top', 'Main Menu');
}

function rg_widgets() {
    
}
