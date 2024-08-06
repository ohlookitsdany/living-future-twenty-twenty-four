<?php

add_action( 'init', 'themeslug_register_meta' );

function sanitize_boolean( $value ) {
	//Explicitly return true or false
	return filter_var($value, FILTER_VALIDATE_BOOLEAN);
}

function themeslug_register_meta() {
	register_meta( 'post', 'featured_checkbox', [
		'object_subtype'    => 'case-studies',
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'boolean',
		'sanitize_callback' => 'sanitize_boolean'
	] );

        register_meta( 'post', 'location_text', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'string',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
        ] );

        register_meta( 'post', 'typo_dropdown', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'string',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
        ] );

        register_meta( 'post', 'place_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'water_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'energy_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'health_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'materials_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'equity_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'beauty_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'cert_type_dropdown', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'string',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
        ] );

        register_meta( 'post', 'sqfoot_dropdown', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'string',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
        ] );

        register_meta( 'post', 'ef_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'nsf_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'npp_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'ls_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'pbr_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );

        register_meta( 'post', 'hnr_checkbox', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'boolean',
                'sanitize_callback' => 'sanitize_boolean'
        ] );


        register_meta( 'post', 'transect_dropdown', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'string',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
        ] );


        register_meta( 'post', 'standard_dropdown', [
                'object_subtype'    => 'case-studies',
                'show_in_rest'      => true,
                'single'            => true,
                'type'              => 'string',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
        ] );

}

/* function living_future_register_blocks() {
    // Automatically load dependencies and version
    $asset_file = include( get_template_directory() . '/blocks/hamburger-menu/build/index.asset.php' );

    // Enqueue block scripts and styles
    wp_register_script(
        'hamburger-menu-block',
        get_template_directory_uri() . '/blocks/hamburger-menu/build/index.js',
        $asset_file['dependencies'],
        $asset_file['version']
    );

    // Register the block
    register_block_type( 'create-block/hamburger-menu', array(
        'editor_script' => 'hamburger-menu-block',
    ) );
}
add_action( 'init', 'living_future_register_blocks' ); */

add_filter( 'rest_post_query', 'themeslug_rest_case_studies', 10, 2 );

function themeslug_rest_case_studies( $args, $request ) {
	$featured = $request->get_param( 'featured_checkbox' );

	if ( $featured ) {
		$args['meta_key'] = 'featured_checkbox';
		$args['meta_value'] = $featured;
	}

	return $args;
}

add_filter( 'pre_render_block', 'themeslug_pre_render_block', 10, 2 );

function themeslug_pre_render_block( $pre_render, $parsed_block ) {

	if (
		isset( $parsed_block['attrs']['query']['featured_checkbox'] )
		&& absint( $parsed_block['attrs']['query']['featured_checkbox'] ) > 0
	) {
		add_filter(
			'query_loop_block_query_vars',
			function( $query ) use ( $parsed_block ) {
				$query['meta_key'] = 'featured_checkbox';
				$query['meta_value'] = absint( $parsed_block['attrs']['query']['featured_checkbox'] );

				return $query;
			}
		);
	}

	return $pre_render;
}

require get_stylesheet_directory() . '/inc/case-studies.php';

add_action( 'enqueue_block_editor_assets', 'themeslug_editor_assets' );

function themeslug_editor_assets() {
	$script_asset = include get_theme_file_path( 'public/js/editor.asset.php' );

	wp_enqueue_script(
		'themeslug-editor',
		get_theme_file_uri( 'public/js/editor.js' ),
		$script_asset['dependencies'],
		$script_asset['version'],
		true
	);
}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );
