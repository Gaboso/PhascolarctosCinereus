<?php

add_action('init', 'register_cursowp_post_type');

function register_cursowp_post_type()
{
    register_post_type('cursowp_posttype',
        array(
            'labels' => array(
                'name' => __('CursoWP Posts'),
                'singular_name' => __('CursoWP Post')
            ),
            'menu_icon' => 'dashicons-groups',
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            ),
            'public' => true,
            'has_archive' => true
        )
    );
}


?>