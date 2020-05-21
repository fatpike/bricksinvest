<?php

add_action('init', 'registerPostTypeBlog');
add_post_type_support('blog', 'thumbnail');


function registerPostTypeBlog()
{
    register_post_type('blog',
        [
            'labels' => [
                'name' => 'Blog',
                'singular_name' => 'Blog',
                'all_items' => 'All blogs',
                'edit_item' => 'Edit blog',
                'add_new' => 'Add blog',
                'add_new_item' => 'Add blog',
                'supports' => array('thumbnail'),
            ],
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-chat',
            'supports' => [
                'title',
                'editor'
            ],
            'rewrite' => [
                'slug' => 'blog'
            ]
        ]);
}

