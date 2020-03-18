<?php

declare(strict_types=1);
add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');
add_theme_support('soil-clean-up');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-nice-search');
add_theme_support('soil-relative-urls');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('customstyles', get_stylesheet_directory_uri() . '/assets/styles/app.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/scripts/app.js');
});

require get_template_directory() . "/plate.php";
