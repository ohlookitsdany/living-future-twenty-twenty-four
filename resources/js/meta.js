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
					<CheckboxControl
						__nextHasNoMarginBottom
						label={ __('Featured?', 'themeslug' )}
						checked={ meta?.featured_checkbox }	
						onChange={ ( value ) => setMeta( {
							...meta,
							featured_checkbox: !!value //Ensures the value is always true or false
						} ) }
					/>
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
                                                value={ meta?.typo_dropdown }
                                                options={ [
                                                        { label: 'Select a typology', value:'' },
                                                        { label: 'Building', value: 'Building' },
                                                        { label: 'Infrastructure + Landscape', value: 'Infrastructure + Landscape' },
                                                        { label: 'Renovation', value: 'Renovation' },
                                                        { label: 'Consumer (LPC)', value: 'Consumer' },
                                                        { label: 'Personal Care (LPC)', value: 'Personal Care' },
                                                ] }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        typo_dropdown: value || null
                                                } ) }
                                        />
					<strong>Petals</strong>
					<CheckboxControl
						__nextHasNoMarginBottom
						label={ __('Place Petal', 'themeslug' ) }
						checked={ meta?.place_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        place_checkbox: value || null
                                                } ) }			
					/>
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Water Petal', 'themeslug' ) }
                                                checked={ meta?.water_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        water_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Energy Petal', 'themeslug' ) }
                                                checked={ meta?.energy_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        energy_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Health Petal', 'themeslug' ) }
                                                checked={ meta?.health_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        health_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Materials Petal', 'themeslug' ) }
                                                checked={ meta?.materials_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        materials_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Equity Petal', 'themeslug' ) }
                                                checked={ meta?.equity_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        equity_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Beauty Petal', 'themeslug' ) }
                                                checked={ meta?.beauty_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        beauty_checkbox: value || null
                                                } ) }
                                        />			
					<SelectControl
						label={ __( 'Certification Type', 'themeslug' ) }
						value={ meta?.cert_type_dropdown }
						options={ [
							{ label: 'Select a Certification', value:'' },
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
							{ label: 'Select a Square Footage', value:'' },
							{ label: 'Less than 1,000', value:'< 1,000' },
							{ label: '1,000 to 10,000', value: '1,000 - 10,000' },
							{ label: '10,000 to 50,000', value: '10,000 - 50,000' },
							{ label: '50,000 to 100,000', value: '50,000 - 100,000' },
							{ label: 'Greater than 150,000', value: '> 150,000' },
						] }
						onChange={ ( value ) => setMeta( {
							...meta,
							sqfoot_dropdown: value || null
						} ) }
					/>
                                        <strong>Biophilic Design Elements</strong>
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Environmental Feature', 'themeslug' ) }
                                                checked={ meta?.ef_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        ef_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Natural Shapes & Forms', 'themeslug' ) }
                                                checked={ meta?.nsf_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        nsf_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Natural Patterns & Processes', 'themeslug' ) }
                                                checked={ meta?.npp_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        npp_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Light & Space', 'themeslug' ) }
                                                checked={ meta?.ls_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        ls_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Place-Based Relationship', 'themeslug' ) }
                                                checked={ meta?.pbr_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        pbr_checkbox: value || null
                                                } ) }
                                        />
                                        <CheckboxControl
                                                __nextHasNoMarginBottom
                                                label={ __('Evolved Human-Nature Relationships', 'themeslug' ) }
                                                checked={ meta?.hnr_checkbox }
                                                onChange={ ( value ) => setMeta( {
                                                        ...meta,
                                                        hnr_checkbox: value || null
                                                } ) }
                                        />			
					<SelectControl
                                                label={ __( 'Transect', 'themeslug' ) }
                                                value={ meta?.transect_dropdown }
                                                options={ [
                                                        { label: 'Select a transect', value:'' },
                                                        { label: 'L1. Natural Habitat Preserve', value: 'L1. Natural Habitat Preserve' },
                                                        { label: 'L2. Rural Agricultural Zone', value: 'L2. Rural Agricultural Zone' },
                                                        { label: 'L3. Village or Campus Zone', value: 'L3. Village or Campus Zone' },
                                                        { label: 'L4. General Urban Zone', value: 'L4. General Urban Zone' },
                                                        { label: 'L5. Urban Center Zone', value: 'L5. Urban Center Zone' },
                                                        { label: 'L6. Urban Core Zone', value: 'L6. Urban Core Zone' },
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
							{ label: 'Select a Standard Version', value:'' },
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
