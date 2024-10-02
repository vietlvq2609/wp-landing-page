<?php
// Enqueue styles and scripts
function gmld_enqueue_styles() {
    wp_enqueue_style('global-style', get_template_directory_uri() . '/assets/css/global.css');
}
add_action('wp_enqueue_scripts', 'gmld_enqueue_styles');

// Register navigation menus
function gmld_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gamification-landing'),
    ));
}

// Add support for post thumbnails
add_theme_support('post-thumbnails');

// Disable admin bar in preview mode
add_filter('show_admin_bar', '__return_false');