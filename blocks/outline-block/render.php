<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render

 */

//Create the Outline
global $post;

if ( $post ) {
    $post_content = $post->post_content;

    preg_match_all( '/<h([2-5])[^>]*>([^<]+)<\/h[2-5]>/', $post_content, $matches, PREG_SET_ORDER );

    if ( ! empty( $matches ) ) {
        $outline = '<div class="outline-block"><ul>';

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

        $outline .= '</ul></div>';
        echo $outline; // Output the generated outline
    } else {
        echo 'No headings found'; // Output a message if no headings are found
    }

    // Modify content to add anchor links to <h2> headings
    $content = $post->post_content;
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
}

?>
