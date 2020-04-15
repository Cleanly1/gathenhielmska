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
    // wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    wp_register_script('ScrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', null, null, true);
    wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js', null, null, true);
    // wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('ScrollMagic');
    wp_enqueue_script('gsap');
    // wp_enqueue_script('bootstrap');

    wp_enqueue_style('customstyles', get_stylesheet_directory_uri() . '/assets/styles/app.css');
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/styles/navbar.css');
    wp_enqueue_style('footerStyles', get_stylesheet_directory_uri() . '/assets/styles/footer.css');
    wp_enqueue_style('visit', get_stylesheet_directory_uri() . '/assets/styles/visit.css');
    wp_enqueue_style('activity', get_stylesheet_directory_uri() . '/assets/styles/activity.css');
    wp_enqueue_style('history', get_stylesheet_directory_uri() . '/assets/styles/history.css');
    wp_enqueue_style('facilities', get_stylesheet_directory_uri() . '/assets/styles/facilities.css');
    wp_enqueue_style('contact', get_stylesheet_directory_uri() . '/assets/styles/contact.css');
    wp_enqueue_style('allround', get_stylesheet_directory_uri() . '/assets/styles/allround.css');
    wp_enqueue_style('frontPage', get_stylesheet_directory_uri() . '/assets/styles/front-page.css');
    wp_enqueue_style('event', get_stylesheet_directory_uri() . '/assets/styles/event.css');
    wp_enqueue_style('history-main', get_stylesheet_directory_uri() . '/assets/styles/history-main.css');
    wp_enqueue_style('history-grids', get_stylesheet_directory_uri() . '/assets/styles/history-grids.css');
    wp_enqueue_style('gallery', get_stylesheet_directory_uri() . '/assets/styles/gallery.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/scripts/app.js');
    wp_enqueue_script('sub-nav', get_template_directory_uri() . '/assets/scripts/sub-nav.js');
    wp_enqueue_script('history-main-js', get_template_directory_uri() . '/assets/scripts/history-main.js');
    wp_enqueue_script('information-btn-visit', get_template_directory_uri() . '/assets/scripts/information-btn-activity.js');
    wp_enqueue_script('information-btn-history', get_template_directory_uri() . '/assets/scripts/information-btn-history.js');
    wp_enqueue_script('navbar', get_template_directory_uri() . '/assets/scripts/navbar.js', false, false, true);
});



function add_theme_caps()
{
    remove_role('editor');
    remove_role('author');
    remove_role('contributor');
    remove_role('subscriber');
    add_role('inhouse', 'In-House');

    $inhouse = get_role('inhouse');
    $inhouse->add_cap('can_edit_posts');
}
add_action('admin_init', 'add_theme_caps');

function change_default_title($title)
{

    $screen = get_current_screen();

    if ('event' == $screen->post_type) {
        $title = 'Please enter a event name';
    }

    return $title;
}

add_filter('enter_title_here', 'change_default_title');


require get_template_directory() . "/plate.php";
require get_template_directory() . "/post-types/event.php";
require get_template_directory() . "/fields/event.php";

require get_template_directory() . "/taxonomies/event-types.php";

