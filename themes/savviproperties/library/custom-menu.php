<?php
/* Custom Post Type ===> layout */
add_action( 'init', 'register_layout_type' );

function register_layout_type() {
$labels = array(
    'name' => _x( 'Layout', 'layout' ),
    'singular_name' => _x( 'Layout', 'layout' ),
    'add_new' => _x( 'Add New', 'layout' ),
    'add_new_item' => _x( 'Add New Layout', 'layout' ),
    'edit_item' => _x( 'Edit Layout', 'layout' ),
    'new_item' => _x( 'New Layout', 'layout' ),
    'view_item' => _x( 'View Layout', 'layout' ),
    'search_items' => _x( 'Search Layout', 'layout' ),
    'not_found' => _x( 'No Layout found', 'layout' ),
    'not_found_in_trash' => _x( 'No Layout found in Trash', 'layout' ),
    'menu_name' => _x( 'Layouts', 'layout' )
);
$args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes' ),
    'taxonomies' => array('category'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-admin-users',
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array('slug' => 'layout'),
    'capability_type' => 'post'
);
register_post_type( 'layout', $args );
}
?>