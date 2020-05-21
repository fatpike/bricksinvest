<?php

add_action('init', 'registerPostTypeTestimonial');

function registerPostTypeTestimonial()
{
    register_post_type('testimonial',
        [
            'labels' => [
                'name' => 'Testimonials',
                'singular_name' => 'Testimonial',
                'all_items' => 'All testimonials',
                'edit_item' => 'Edit testimonial',
                'add_new' => 'Add testimonial',
                'add_new_item' => 'Add testimonial'
            ],
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-testimonial',
            'supports' => [
                'title',
                'editor'
            ],
            'rewrite' => [
                'slug' => 'testimonial'
            ]
        ]);
}
