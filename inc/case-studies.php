<?php
/** Taxonomy: Case Study Type **/
function register_casestudies_types () {
register_taxonomy('program', 'case-studies', array(
		'labels' => array(
			'name'          => 'Types'
		,	'singular_name' => 'Type'
		,	'search_items'  => 'Search Types'
		,	'edit_item'     => 'Edit Type'
		,	'add_new_item'  => 'Add New Type'
		)
	,	'hierarchical' => true
	,	'query_var'    => true
	,	'rewrite'      => array('slug' => 'case-studies/program', 'with_front' => false)
	,	'show_in_rest' => true,
		'show_ui' => true
	)); // type taxonomy
}
/** Tags **/
function register_casestudies_tags () {
register_taxonomy('tag','case-studies', array(
	'hierarchical' => false,
	'labels' => array(
		    'name' => _x( 'Tags', 'taxonomy general name' ),
		    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
		    'search_items' =>  __( 'Search Tags' ),
		    'popular_items' => __( 'Popular Tags' ),
		    'all_items' => __( 'All Tags' ),
		    'parent_item' => null,
		    'parent_item_colon' => null,
		    'edit_item' => __( 'Edit Tag' ),
		    'update_item' => __( 'Update Tag' ),
		    'add_new_item' => __( 'Add New Tag' ),
		    'new_item_name' => __( 'New Tag Name' ),
		    'separate_items_with_commas' => __( 'Separate tags with commas' ),
		    'add_or_remove_items' => __( 'Add or remove tags' ),
		    'choose_from_most_used' => __( 'Choose from the most used tags' ),
		    'menu_name' => __( 'Tags' ),
	),
	'show_ui' => true,
	'show_in_rest' => true,
	'update_count_callback' => '_update_post_term_count',
	'query_var' => true,
	'rewrite' => array( 'slug' => 'tag' ),
));
}


/** Post Type: Case Studies. **/

function register_casestudies_cpt()
{
    $labels = array(
        'name'                  => _x('Case Studies', 'text_domain'),
        'singular_name'         => _x('Case Study', 'text_domain'),
        'menu_name'             => _x('Case Studies', 'text_domain'),
        'name_admin_bar'        => _x('Case Studies', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'add_new_item'          => __('Add New item', 'text_domain'),
        'new_item'              => __('New item', 'text_domain'),
        'edit_item'             => __('Edit item', 'text_domain'),
        'view_item'             => __('View item', 'text_domain'),
        'all_items'             => __('All items', 'text_domain'),
        'search_items'          => __('Search items', 'text_domain'),
        'parent_item_colon'     => __('Parent items:', 'text_domain'),
        'not_found'             => __('No items found.', 'text_domain'),
        'not_found_in_trash'    => __('No items found in Trash.', 'text_domain'),
        'archives'              => _x('item archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'technway'),
        'insert_into_item'      => _x('Insert into item', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'technway'),
        'uploaded_to_this_item' => _x('Uploaded to this item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'technway'),
        'filter_items_list'     => _x('Filter items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'technway'),
        'items_list_navigation' => _x('items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'technway'),
        'items_list'            => _x('items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'technway'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                 => true,
        'publicly_queryable'     => true,
        'show_ui'                => true,
        'show_in_menu'           => true,
        'query_var'              => true,
        'capability_type'        => 'post',
        'has_archive'            => true,
        'hierarchical'           => false,
        'menu_position'          => null,
        'field'                  => 'value',
        'menu_icon'              => 'dashicons-clipboard',
        'taxonomies'             => array('program'),
        'supports'               => array(
                                        'title', // Add the title field
                                        'thumbnail', // Add the thumbnail
					'excerpt' , // Add the excerpt field
					'editor' , // Add editor capability
					'revisions', // Add the revisions field
					'custom-fields' // Add custom fields
                                    ),
        'show_in_rest'          => true
    );
    register_post_type('case-studies', $args);
}
add_action('init', 'register_casestudies_types');
add_action('init', 'register_casestudies_tags');
add_action('init', 'register_casestudies_cpt');
