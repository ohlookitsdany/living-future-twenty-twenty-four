<?php
/**
 * Block related code
 *
 * @package ChefKiss\Blocks
 */

namespace LivingFuture\Blocks;

add_action(
	'init',
	function () {
		$blocks = glob( THEME_BUILD_DIR_PATH . '/*', GLOB_ONLYDIR );
		foreach ( $blocks as $block ) {
			register_block_type( $block );
		}
	}
);

// Register a custom block category
add_action(
	'block_categories_all',
	function( $block_categories ) {
		array_push(
			$block_categories,
			array(
				'slug'  => 'living-future',
				'title' => __( 'Living Future', 'living-future-twenty-twenty-four' ),
			)
		);

		return $block_categories;
	},
	10,
	2
);


add_filter(
	'render_block_data',
	function( $parsed_block ) {
		if (
			'core/avatar' === $parsed_block['blockName'] &&
			isset( $parsed_block['attrs']['useCurrentUser'] ) &&
			true === $parsed_block['attrs']['useCurrentUser']
		) {
			$parsed_block['attrs']['userId'] = get_current_user_id();
		}
		return $parsed_block;
	}
);

add_filter(
	'render_block_core/avatar',
	function( $block_content, $block ) {
		if ( isset( $block['attrs']['useCurrentUser'] ) && true === $block['attrs']['useCurrentUser'] ) {
			return '<div class="avatar-chef-hat"></div>' . $block_content . '';
		}
		return $block_content;
	},
	10,
	2
);

