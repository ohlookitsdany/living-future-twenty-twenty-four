import { useEntityProp } from '@wordpress/core-data';
import { useSelect } from '@wordpress/data';
import { PluginDocumentSettingPanel } from '@wordpress/edit-post';
import { __ } from '@wordpress/i18n';
import { starFilled } from '@wordpress/icons';
import { registerPlugin } from '@wordpress/plugins';

import {
	RangeControl,
	__experimentalInputControl as InputControl,
	__experimentalNumberControl as NumberControl,
	__experimentalVStack as VStack,
	CheckboxControl,
	SelectControl
} from '@wordpress/components';

registerPlugin( 'lf-tt4-case-studies', {
	render: () => {
		// Add your custom code here.
		const postType = useSelect(
			( select ) => select( 'core/editor' ).getCurrentPostType(),
			[]
		);

		const [ meta, setMeta ] = useEntityProp( 'postType', postType, 'meta' );

		if ( 'case-studies' !== postType ) {
			return null;
		}

		return (
			<PluginDocumentSettingPanel
				title={ __( 'Case Study Options', 'themeslug' ) }
			>
				<VStack>
					<InputControl
						label={ __( 'Location or Manufacturer', 'themeslug' ) }
						value={ meta?.location_text }
						onChange={ ( value ) => setMeta( {
							...meta,
							location_text: value || null
						} ) }
					/>
                                        <SelectControl
                                                label={ __( 'LBC & LPC Typology', 'themeslug' ) }
                                                value={ meta?.standard_dropdown }
                                                options={ [
                                                        { label: 'Select a typology', value:'', disabled:true },
                                                        { label: 'Building', value: 'Building' },
                                                        { label: 'Infrastructure + Landscape', value: 'Infrastructure + Landscape' },
                                                        { label: 'Renovation', value: 'Renovation' },
                                                        { label: 'Consumer (LPC)', value: 'Consumer' },
                                                        { label: 'Personal Care (LPC)', value: 'Personal Care' },
                                                ] }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        standard_dropdown: value || null
                                                } ) }
                                        />			
					<SelectControl
						label={ __( 'Certification Type', 'themeslug' ) }
						value={ meta?.cert_type_dropdown }
						options={ [
							{ label: 'Select a Certification', value:'', disabled: true },
							{ label: 'Living Certified', value:'Living Certified' },
							{ label: 'Petal Certified', value: 'Petal Certified' },
							{ label: 'Net Zero Energy Certified', value: 'Net Zero Energy Certified'},
							{ label: 'Zero Energy Certified', value: 'Zero Energy Certified'},
							{ label: 'Zero Carbon Certified', value: 'Zero Carbon Certified'},
							{ label: 'Imperative Certified', value: 'Imperative Certified'},
							{ label: 'Core Certified', value: 'Core Certified'},
						] }
						onChange={ ( value ) => setMeta( {
							...meta,
							cert_type_dropdown: value || null
						} ) }
					/>
					<SelectControl
						label={ __('Square Footage', 'themeslug' )}
						value={ meta?.sqfoot_dropdown }
						options={ [
							{ label: 'Select a Square Footage', value:'', disabled:true },
							{ label: 'Less than 1,000', value:'< 1,000' },
							{ label: '1,000 to 10,000', value: '1,000-10,000' },
							{ label: '10,000 to 50,000', value: '10,000-50,000' },
							{ label: '50,000 to 100,000', value: '50,000-100,000' },
							{ label: 'Greater than 150,000', value: '> 150,000' },
						] }
						onChange={ ( value ) => setMeta( {
							...meta,
							sqfoot_dropdown: value || null
						} ) }
					/>
                                        <SelectControl
                                                label={ __( 'Transect', 'themeslug' ) }
                                                value={ meta?.transect_dropdown }
                                                options={ [
                                                        { label: 'Select a transect', value:'', disabled:true },
                                                        { label: 'L1. Natural Habitat Preserve', value: 'L1' },
                                                        { label: 'L2. Rural Agricultural Zone', value: 'L2' },
                                                        { label: 'L3. Village of Campus Zone', value: 'L3' },
                                                        { label: 'L4. General Urban Zone', value: 'L4' },
                                                        { label: 'L5. Urban Center Zone', value: 'L5' },
                                                        { label: 'L6. Urban Core Zone', value: 'L6' },
                                                ] }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        transect_dropdown: value || null
                                                } ) }
                                        />			
					<SelectControl
						label={ __( 'Standard Version', 'themeslug' ) }
						value={ meta?.standard_dropdown }
						options={ [
							{ label: 'Select a Standard Version', value:'', disabled:true },
							{ label: 'LBC 1.3', value: 'LBC 1.3' },
							{ label: 'LBC 2.0', value: 'LBC 2.0' },
							{ label: 'LBC 2.1', value: 'LBC 2.1' },
							{ label: 'LBC 3.0', value: 'LBC 3.0' },
							{ label: 'LBC 3.1', value: 'LBC 3.1' },
							{ label: 'LBC 4.0', value: 'LBC 4.0' },
							{ label: 'LBC 4.1', value: 'LBC 4.1' },
							{ label: 'LPC 1.0', value: 'LPC 1.0' },
							{ label: 'LPC 2.0', value: 'LPC 2.0' },
						] }
						onChange={ ( value ) => setMeta( {
							...meta,
							standard_dropdown: value || null
						} ) }
					/>
				</VStack>
			</PluginDocumentSettingPanel>
		);
	}
} );
