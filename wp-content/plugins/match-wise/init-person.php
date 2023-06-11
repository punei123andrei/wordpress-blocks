<?php

function create_person_post_type(){
    $labels = array(
        'name'                  => _x( 'Person', 'Post type general name', 'personlist' ),
        'singular_name'         => _x( 'Person', 'Post type singular name', 'personlist' ),
        'menu_name'             => _x( 'persons', 'Admin Menu text', 'personlist' ),
        'name_admin_bar'        => _x( 'person', 'Add New on Toolbar', 'personlist' ),
        'add_new'               => __( 'Add New', 'personlist' ),
        'add_new_item'          => __( 'Add New person', 'personlist' ),
        'new_item'              => __( 'New person', 'personlist' ),
        'edit_item'             => __( 'Edit person', 'personlist' ),
        'view_item'             => __( 'View person', 'personlist' ),
        'all_items'             => __( 'All persons', 'personlist' ),
        'search_items'          => __( 'Search person', 'personlist' ),
        'parent_item_colon'     => __( 'Parent person:', 'personlist' ),
        'not_found'             => __( 'No person found.', 'personlist' ),
        'not_found_in_trash'    => __( 'No person found in Trash.', 'personlist' ),
        'featured_image'        => _x( 'person Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'personlist' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'personlist' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'personlist' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'personlist' ),
        'archives'              => _x( 'person archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'personlist' ),
        'insert_into_item'      => _x( 'Insert into person', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'personlist' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this person', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'personlist' ),
        'filter_items_list'     => _x( 'Filter persons list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'personlist' ),
        'items_list_navigation' => _x( 'person list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'personlist' ),
        'items_list'            => _x( 'person list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'personlist' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for person',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'person' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  1,
        'supports'              =>  [ 'title' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'person', $args );
}