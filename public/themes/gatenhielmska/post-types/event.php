<?php

add_action('init', function () {
    register_post_type('event', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Create a new Event'),
            'edit_item' => __('Edit Event'),
            'name' => __('Events'),
            'search_items' => __('Search Events'),
            'singular_name' => __('Event'),
        ],
        'supports' => [
            'title'
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
