<?php
/**
 * Creates the Custom posts for the projects
 *
 * And setup for the taxonomies
 *
 */

if ( ! function_exists('register_projects') ) {

// Register Custom Post Type
    function register_projects() {

        $labels = array(
            'name'                  => _x( 'projects', 'Post Type General Name', 'understrap' ),
            'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'understrap' ),
            'menu_name'             => __( 'Projects', 'understrap' ),
            'name_admin_bar'        => __( 'Project', 'understrap' ),
            'archives'              => __( 'Projects', 'understrap' ),
            'attributes'            => __( 'Item Attributes', 'understrap' ),
            'parent_item_colon'     => __( 'Parent Item:', 'understrap' ),
            'all_items'             => __( 'All Projects', 'understrap' ),
            'add_new_item'          => __( 'Add New Project', 'understrap' ),
            'add_new'               => __( 'Add Project', 'understrap' ),
            'new_item'              => __( 'New Project', 'understrap' ),
            'edit_item'             => __( 'Edit Project', 'understrap' ),
            'update_item'           => __( 'Update Project', 'understrap' ),
            'view_item'             => __( 'View Project', 'understrap' ),
            'view_items'            => __( 'View Projects', 'understrap' ),
            'search_items'          => __( 'Search Projects', 'understrap' ),
            'not_found'             => __( 'Not found', 'understrap' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'understrap' ),
            'featured_image'        => __( 'Featured Image', 'understrap' ),
            'set_featured_image'    => __( 'Set featured image', 'understrap' ),
            'remove_featured_image' => __( 'Remove featured image', 'understrap' ),
            'use_featured_image'    => __( 'Use as featured image', 'understrap' ),
            'insert_into_item'      => __( 'Insert into item', 'understrap' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'understrap' ),
            'items_list'            => __( 'Items list', 'understrap' ),
            'items_list_navigation' => __( 'Items list navigation', 'understrap' ),
            'filter_items_list'     => __( 'Filter items list', 'understrap' ),
        );
        $args = array(
            'label'                 => __( 'Project', 'understrap' ),
            'description'           => __( 'Project Info', 'understrap' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', ),
            'taxonomies'            => array( 'project_category' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-index-card',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type( 'project', $args );

    }
    add_action( 'init', 'register_projects', 0 );

}


if ( ! function_exists( 'setup_project_categories' ) ) {

// Register Custom Taxonomy
    function setup_project_categories() {

        $labels = array(
            'name'                       => _x( 'Categories', 'Taxonomy General Name', 'understrap' ),
            'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'understrap' ),
            'menu_name'                  => __( 'Categories', 'understrap' ),
            'all_items'                  => __( 'All Categories', 'understrap' ),
            'parent_item'                => __( 'Parent Category', 'understrap' ),
            'parent_item_colon'          => __( 'Parent Category:', 'understrap' ),
            'new_item_name'              => __( 'New Category Name', 'understrap' ),
            'add_new_item'               => __( 'Add Category', 'understrap' ),
            'edit_item'                  => __( 'Edit Category', 'understrap' ),
            'update_item'                => __( 'Update Category', 'understrap' ),
            'view_item'                  => __( 'View Category', 'understrap' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'understrap' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'understrap' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'understrap' ),
            'popular_items'              => __( 'Popular Items', 'understrap' ),
            'search_items'               => __( 'Search Items', 'understrap' ),
            'not_found'                  => __( 'Not Found', 'understrap' ),
            'no_terms'                   => __( 'No items', 'understrap' ),
            'items_list'                 => __( 'Items list', 'understrap' ),
            'items_list_navigation'      => __( 'Items list navigation', 'understrap' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
        );
        register_taxonomy( 'project_category', array( 'project' ), $args );

    }
    add_action( 'init', 'setup_project_categories', 0 );

}