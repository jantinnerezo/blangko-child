<?php

/**
 * Define your custom post types here
 * just remove this example and add your own post types!
 */
function blangko_post_types(): array
{
    return [
        [
            'name' => 'post-type',
            'plural_name' => 'Post Types',
            'singular_name' => 'Post Type',
            'icon' => 'welcome-write-blog',
            'public' => false,
            'show_in_rest' => false, // Optional
            'show_in_graphql' => false // Optional
        ]
    ];
}
