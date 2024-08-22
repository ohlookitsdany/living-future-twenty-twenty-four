<?php
/*Centralized location for all filters and code related to query blocks and variations.*/


//Add filters for featured case studies query variation
add_filter( 'rest_case-studies_query', 'themeslug_rest_case_studies', 10, 2 );

function themeslug_rest_case_studies( $args, $request ) {
	$meta_query = $request->get_param( 'metaQuery' );

	if ( 
		$meta_query
		&& ! empty( $meta_query[0]['key'] )
		&& 'featured_checkbox' === $meta_query[0]['key']
		&& ! empty( $meta_query[0]['value'] )
		&& 0 < absint( $meta_query[0]['value'] )
	) {
		$args['meta_key'] = 'featured_checkbox';
		$args['meta_value_num'] = absint( $meta_query[0]['value'] );
	}

	return $args;
}

add_filter( 'pre_render_block', 'themeslug_pre_render_block', 10, 2 );

function themeslug_pre_render_block( $pre_render, $parsed_block ) {
	
	if ( 
		'core/query' === $parsed_block['blockName']
		&& ! empty( $parsed_block['attrs']['query']['metaQuery'][0]['key'] )
		&& 'featured_checkbox' === $parsed_block['attrs']['query']['metaQuery'][0]['key']
		&& ! empty( $parsed_block['attrs']['query']['metaQuery'][0]['value'] )
		&& 0 < absint( $parsed_block['attrs']['query']['metaQuery'][0]['value'] )
	) {
		add_filter(
			'query_loop_block_query_vars',
			function( $query ) use ( $parsed_block ) {
				$query['meta_key'] = 'featured_checkbox';
				$query['meta_value_num'] = absint( $parsed_block['attrs']['query']['metaQuery'][0]['value'] );

				return $query;
			}
		);
	}

	return $pre_render;
}

