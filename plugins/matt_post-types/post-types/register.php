<?php

function matt_register_music_type() {
    $labels = array(
        'name'                      => __( 'Music', MATTDOMAIN ),
        'singular_name'             => __( 'Music', MATTDOMAIN ),
        'featured_image'            => __( 'Album Cover', MATTDOMAIN ),
        'set_featured_image'        => __( 'Set Album Cover', MATTDOMAIN ),
        'remove_featured_image'     => __( 'Remove Album Cover', MATTDOMAIN ),
        'use_feature_image'         => __( 'Use Album Cover', MATTDOMAIN ),
        'archives'                  => __( 'Music Directory', MATTDOMAIN ),
        'add_new'                   => __( 'Add New Album', MATTDOMAIN ),
        'add_new_item'              => __( 'Add New Album', MATTDOMAIN)

    );

    $args = array(
        'labels'                    => $labels,
        'public'                    => true,
        'has_archive'               => 'music',
        'rewrite'                   => array( 'has_front' => true ),
        'menu_icon'                 => 'dashicons-album',
        'supports'                  => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'              => false
    );

    register_post_type( 'music', $args ); 
}

function matt_register_movie_type() {
    $labels = array(
        'name'                      => __( 'Movie', MATTDOMAIN ),
        'singular_name'             => __( 'Movie', MATTDOMAIN ),
        'featured_image'            => __( 'Movie Poster', MATTDOMAIN ),
        'set_featured_image'        => __( 'Set Movie Poster', MATTDOMAIN ),
        'remove_featured_image'     => __( 'Remove Movie Poster', MATTDOMAIN ),
        'use_feature_image'         => __( 'Use Movie Poster', MATTDOMAIN ),
        'archives'                  => __( 'Movies Directory', MATTDOMAIN ),
        'add_new'                   => __( 'Add New Movie', MATTDOMAIN ),
        'add_new_item'              => __( 'Add New Movie', MATTDOMAIN)

    );

    $args = array(
        'labels'                    => $labels,
        'public'                    => true,
        'has_archive'               => 'movies',
        'rewrite'                   => array( 'has_front' => true ),
        'menu_icon'                 => 'dashicons-format-video',
        'supports'                  => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'              => true
    );

    register_post_type( 'movies', $args ); 
}

