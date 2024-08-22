<?php
/*Centralized location for all theme enqueues.*/

//Load theme assets
add_action( 'enqueue_block_editor_assets', 'themeslug_editor_assets' );

function themeslug_editor_assets() {
	$script_asset = include get_theme_file_path( 'build/js/editor.asset.php' );

	wp_enqueue_script(
		'themeslug-editor',
		get_theme_file_uri( 'build/js/editor.js' ),
		$script_asset['dependencies'],
		$script_asset['version'],
		true
	);
}

