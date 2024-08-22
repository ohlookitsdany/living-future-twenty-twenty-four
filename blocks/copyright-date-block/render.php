<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
$current_year = date( "Y" );

//Determine which content to display.
if ( isset( $attributes['fallbackCurrentYear'] ) && $attributes['fallbackCurrentYear'] === $current_year ) {

    //The current year is the same as the fallback, so use the block content saved in the database.
    $block_content = $content;
} else {

    // The current year is different from the fallback, so render the updated block content.
    if ( ! empty( $attributes['startingYear'] ) && ! empty( $attributes['showStartingYear'] ) ) {
        // The starting year toggle is checked, so display the starting year to current year range.
        $display_date = $attributes['startingYear'] . '–' . $current_year;
    } else {
	// The starting year toggle isn't checked, so just display the current year.    
        $display_date = $current_year;
    }
    
    $block_content = '<p' . get_block_wrapper_attributes() . esc_html_e('>© ') . esc_html( $display_date ) . esc_html_e(' International Living Future Institute. All rights reserved.') . '</p>';
}

echo wp_kses_post( $block_content );
