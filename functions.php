<?php

add_action( 'init', 'themeslug_register_meta' );

function themeslug_register_meta() {
	register_meta( 'case-studies', 'cert_type_dropdown', [
		'show_in_rest'	    => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	] );

	register_meta( 'case-studies', 'location_text', [
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	] );

	register_meta( 'case-studies', 'standard_dropdown', [
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	] );

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
