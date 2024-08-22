import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
    const { fallbackCurrentYear, showStartingYear, startingYear } = attributes;
    
    if ( ! fallbackCurrentYear ) {
        return null;
    }

    let displayDate;

    if ( showStartingYear && startingYear ) {
        displayDate = startingYear + '–' + fallbackCurrentYear;
    } else {
        displayDate = fallbackCurrentYear;
    }

    return (
        <p { ...useBlockProps.save() }>{__('© ')}{ displayDate }{__(' International Living Future Institute. All rights reserved.')}</p>
    );
}
