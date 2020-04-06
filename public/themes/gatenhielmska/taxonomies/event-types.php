<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('event_type', ['event'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Event Type'),
            'edit_item' => __('Edit Event Type'),
            'name' => __('Event Types'),
            'search_items' => __('Search Event Types'),
            'singular_name' => __('Event Type'),
        ],
        'show_admin_column' => true,
    ]);
});
