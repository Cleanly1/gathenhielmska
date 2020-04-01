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
    wp_deregister_script('jquery');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');

    wp_enqueue_style('customstyles', get_stylesheet_directory_uri() . '/assets/styles/app.css');
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/styles/navbar.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/scripts/app.js');
    wp_enqueue_script('navbar', get_template_directory_uri() . '/assets/scripts/navbar.js', false, false, true);
});

function add_theme_caps()
{
    remove_role('editor');
    remove_role('author');
    remove_role('contributor');
    add_role('inhouse', 'In-House');

    $inhouse = get_role('inhouse');
    $inhouse->add_cap('can_edit_posts');
}
add_action('admin_init', 'add_theme_caps');



require get_template_directory() . "/plate.php";
require get_template_directory() . "/post-types/event.php";
require get_template_directory() . "/fields/event.php";
