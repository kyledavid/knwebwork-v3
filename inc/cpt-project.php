<?php

function create_project_cpt() {
    $labels = array(
        'name'                  => __('Projects'),
        'singular_name'         => __('Project'),
        'add_new'               => __('Add New Project'),
        'edit_item'             => __('Edit Project'),
        'new_item'              => __('New Project'),
        'view_item'             => __('View Project'),
        'search_items'          => __('Search Projects'),
        'not_found'             => __('Nothing Found'),
        'featured_image'        => __('Screenshot'),
        'set_featured_image'    => __('Set Screenshot'),
        'remove_featured_image' => __('Remove Screenshot'),
        'use_featured_image'    => __('Use Screenshot'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'exclude_from_search'   => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'query_var'             => true,
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_icon'             => 'dashicons-portfolio',
        'rewrite'               => array( 'slug' => 'portfolios', 'with_front' => false ),
        'has_archive'           => true,
        'supports'              => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'project', $args );
}

add_action( 'init', 'create_project_cpt' );

?>