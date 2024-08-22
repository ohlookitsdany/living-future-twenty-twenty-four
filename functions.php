<?php

//Define some Constants
define('THEME_DIR_PATH', get_stylesheet_directory() );
define('THEME_DIR_URL', get_stylesheet_directory_uri() );
define('THEME_INC_PATH', THEME_DIR_PATH . '/inc/' );
define('THEME_BLOCK_PATH', THEME_DIR_PATH . '/blocks/' );
define('THEME_BLOCK_URL', THEME_DIR_URL . '/blocks' );
define('THEME_BUILD_DIR_PATH', THEME_DIR_PATH . '/build' );

//Require files
require_once THEME_INC_PATH . 'case-studies.php';
require_once THEME_INC_PATH . 'blocks.php';
require_once THEME_INC_PATH . 'meta.php';
require_once THEME_INC_PATH . 'queries.php';
require_once THEME_INC_PATH . 'enqueues.php';

/**
 * Theme Functions
 **/

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
