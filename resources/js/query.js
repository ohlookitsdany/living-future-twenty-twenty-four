import { __ } from '@wordpress/i18n';
import { addFilter } from '@wordpress/hooks';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, SelectControl, CheckboxControl } from '@wordpress/components';

const CaseStudyControls = ( { props: {
	attributes,
	setAttributes
} } ) => {
	const { query } = attributes;

	return (
		<PanelBody title={ __( 'Featured Case Studies', 'themeslug' ) }>
			<CheckboxControl
				label={ __( 'Featured Only?', 'themeslug' ) }
				checked={ query?.featuredCheckbox || ''}
				onChange={ ( value ) => {
					setAttributes( {
						query: {
							...query,
							featuredCheckbox: value
						}
					} );
				} }
			/>
		</PanelBody>
	);
};

const withCaseStudyControls = ( BlockEdit ) => ( props ) => {
	return 'core/query' === props.name ? (
		<>
			<BlockEdit {...props} />
			<InspectorControls>
			<CaseStudyControls props={props} />
			</InspectorControls>
		</>
	) : (
		<BlockEdit {...props} />
	);
};

addFilter( 'editor.BlockEdit', 'core/query', withCaseStudyControls );
