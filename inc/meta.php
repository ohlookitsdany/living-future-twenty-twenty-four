<?php
//Register Theme Meta
add_action( 'init', 'themeslug_register_meta' );

function sanitize_boolean( $value ) {
	//Explicitly return true or false
	return filter_var($value, FILTER_VALIDATE_BOOLEAN);
}

function themeslug_register_meta() {
	register_meta( 'post', 'cover_caption', [
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	] );

	register_meta( 'post', 'cover_credit', [
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	] );

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

