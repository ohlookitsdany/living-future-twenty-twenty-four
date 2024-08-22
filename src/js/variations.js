import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { page, pencil, starFilled, mapMarker, post, megaphone } from '@wordpress/icons';

const clipboard = (
	<svg width="24" height="24" viewBox="0 0 24 24" version="1.1">
		<path d="M17.3,17.5c-0.2,0.8-0.5,1.4-1,1.9c-0.4,0.5-1,0.9-1.7,1.2C13.9,20.9,13.1,21,12,21c-0.6,0-1.3-0.1-1.9-0.2 c-0.6-0.1-1.1-0.4-1.6-0.7c-0.5-0.3-0.9-0.7-1.2-1.2c-0.3-0.5-0.5-1.1-0.5-1.7h1.5c0.1,0.5,0.2,0.9,0.5,1.2 c0.2,0.3,0.5,0.6,0.9,0.8c0.3,0.2,0.7,0.3,1.1,0.4c0.4,0.1,0.8,0.1,1.2,0.1c1.4,0,2.5-0.4,3.1-1.2c0.6-0.8,1-2,1-3.5v-1.7h0 c-0.4,0.8-0.9,1.4-1.6,1.9c-0.7,0.5-1.5,0.7-2.4,0.7c-1,0-1.9-0.2-2.6-0.5C8.7,15,8.1,14.5,7.7,14c-0.5-0.6-0.8-1.3-1-2.1 c-0.2-0.8-0.3-1.6-0.3-2.5c0-0.9,0.1-1.7,0.4-2.5c0.3-0.8,0.6-1.5,1.1-2c0.5-0.6,1.1-1,1.8-1.4C10.3,3.2,11.1,3,12,3 c0.5,0,0.9,0.1,1.3,0.2c0.4,0.1,0.8,0.3,1.1,0.5c0.3,0.2,0.6,0.5,0.9,0.8c0.3,0.3,0.5,0.6,0.6,1h0V3.4h1.5V15 C17.6,15.9,17.5,16.7,17.3,17.5z M13.8,14.1c0.5-0.3,0.9-0.7,1.3-1.1c0.3-0.5,0.6-1,0.8-1.6c0.2-0.6,0.3-1.2,0.3-1.9 c0-0.6-0.1-1.2-0.2-1.9c-0.1-0.6-0.4-1.2-0.7-1.7c-0.3-0.5-0.7-0.9-1.3-1.2c-0.5-0.3-1.1-0.5-1.9-0.5s-1.4,0.2-1.9,0.5 c-0.5,0.3-1,0.7-1.3,1.2C8.5,6.4,8.3,7,8.1,7.6C8,8.2,7.9,8.9,7.9,9.5c0,0.6,0.1,1.3,0.2,1.9C8.3,12,8.6,12.5,8.9,13 c0.3,0.5,0.8,0.8,1.3,1.1c0.5,0.3,1.1,0.4,1.9,0.4C12.7,14.5,13.3,14.4,13.8,14.1z" />
	</svg>
);

registerBlockVariation( 'core/paragraph', {
	name:       'themeslug/casestudies_certification',
	title:      __( 'Certification Type', 'themeslug' ),
	description: __( 'Displays the case study certification type.', 'themeslug' ),
	category:   'living-future',
	keywords:   [ 'case study', 'certification' ],
	icon:       megaphone,
	scope:      [ 'inserter' ],
	attributes: {
		metadata: {
			bindings: {
				content: {
					source: 'core/post-meta',
					args: {
						key: 'cert_type_dropdown'
					}
				}
			}
		},
		placeholder: __( 'Certification Type', 'themeslug' )
	},
	example: {},
	isActive: (blockAttributes) =>
		'cert_type_dropdown' === blockAttributes?.metadata?.bindings?.content?.args?.key
});

registerBlockVariation( 'core/paragraph', {
	name:       'themeslug/casestudies_location',
	title:      __( 'Location or Manufacturer', 'themeslug' ),
	description: __( 'Displays the case study location or manufacturer (LPC).', 'themeslug' ),
	category:   'living-future',
	keywords:   [ 'case study', 'location', 'manufacturer' ],
	icon:       mapMarker,
	scope:      [ 'inserter' ],
	attributes: {
		metadata: {
			bindings: {
				content: {
					source: 'core/post-meta',
					args: {
						key: 'location_text'
					}
				}
			}
		},
		placeholder: __( 'Location or Manufacturer', 'themeslug' )
	},
	example: {},
	isActive: (blockAttributes) =>
		'location_text' === blockAttributes?.metadata?.bindings?.content?.args?.key
});

registerBlockVariation( 'core/paragraph', {
	name:       'themeslug/casestudies_version',
	title:      __( 'Certification Standard Version', 'themeslug' ),
	description: __( 'Displays the case study certification version.', 'themeslug' ),
	category:   'living-future',
	keywords:   [ 'case study', 'standard', 'version' ],
	icon:       starFilled,
	scope:      [ 'inserter' ],
	attributes: {
		metadata: {
			bindings: {
				content: {
					source: 'core/post-meta',
					args: {
						key: 'standard_dropdown'
					}
				}
			}
		},
		placeholder: __( 'Standard Version', 'themeslug' )
	},
	example: {},
	isActive: (blockAttributes) =>
		'standard_dropdown' === blockAttributes?.metadata?.bindings?.content?.args?.key
});

registerBlockVariation( 'core/paragraph', {
        name:       'themeslug/casestudies_typo',
        title:      __( 'Case Study Typology', 'themeslug' ),
        description: __( 'Displays the case study typology.', 'themeslug' ),
        category:   'living-future',
        keywords:   [ 'case study', 'typology' ],
        icon:       pencil,
        scope:      [ 'inserter' ],
        attributes: {
                metadata: {
                        bindings: {
                                content: {
                                        source: 'core/post-meta',
                                        args: {
                                                key: 'typo_dropdown'
                                        }
                                }
                        }
                },
                placeholder: __( 'Typology', 'themeslug' )
        },
        example: {},
        isActive: (blockAttributes) =>
                'typo_dropdown' === blockAttributes?.metadata?.bindings?.content?.args?.key
});

registerBlockVariation( 'core/query', {
	name: 'themeslug/featured-case-studies',
	title: 'Featured Case Studies',
	description: 'Displays featured case studies for the program type.',
	category: 'living-future',
	icon: post,
	attributes: {
		namespace: 'themeslug/featured-case-studies',
		query: {
			perPage: 3,
			pages: 0,
			offset: 0,
			postType: 'case-studies',
			order: 'desc',
			orderBy: 'date',
			author: '',
			search: '',
			exclude: [],
			sticky: '',
			inherit: false,
			metaQuery: [
				{
					key: 'featured_checkbox',
					value: '1',
					compare: '='
				}
			]
		},
		displayLayout: {
			type: 'flex',
			columns: 3
		}
	},
	scope: [ 'inserter'],
	isActive: [ 'namespace' ],
	innerBlocks: [
		[
			'core/post-template',
			{},
			[ [ 'core/post-title' ], [ 'core/post-excerpt' ] ],
		],
		[ 'core/query-pagination' ],
		[ 'core/query-no-results' ],
	],
	allowedControls: [ 'order', 'taxQuery' ]
});
