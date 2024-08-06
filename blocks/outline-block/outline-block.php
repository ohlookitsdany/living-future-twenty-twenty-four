<?php
/**
 * Plugin Name:       Outline Block
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       outline-block
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_outline_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}

function outline_block_render( $attributes, $content ) {
    global $post;

    if ( ! $post ) {
        return '';
    }

    $post_content = $post->post_content;
    preg_match_all( '/<h([2-5])[^>]*>([^<]+)<\/h[2-5]>/', $post_content, $matches, PREG_SET_ORDER );

    if ( empty( $matches ) ) {
        return 'No headings found';
    }

    $outline = '<ul>';
    foreach ( $matches as $match ) {
        $level = $match[1];
        $text = $match[2];
        $anchor = sanitize_title( $text );

        if ( $level == 2 ) {
            $outline .= sprintf(
                '<li class="outline-level-%1$d"><a href="#%2$s">%3$s</a></li>',
                $level,
                $anchor,
                esc_html( $text )
            );
        } else {
            $outline .= sprintf(
                '<li class="outline-level-%1$d">%2$s</li>',
                $level,
                esc_html( $text )
            );
        }
    }
    $outline .= '</ul>';

    return $outline;
}

function add_anchor_links_to_headings( $content ) {
    $content = preg_replace_callback(
        '/<h2([^>]*)>([^<]+)<\/h2>/i',
        function ( $matches ) {
            $anchor = sanitize_title( $matches[2] );
            return sprintf(
                '<h2%1$s id="%2$s">%3$s</h2>',
                $matches[1],
                $anchor,
                $matches[2]
            );
        },
        $content
    );
    return $content;
}
add_filter( 'the_content', 'add_anchor_links_to_headings' );

add_action( 'init', 'create_block_outline_block_block_init' );
