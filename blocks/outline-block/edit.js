/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import { createElement } from '@wordpress/element';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
        const blockProps = useBlockProps();
        const postContent = useSelect(select => select('core/editor').getEditedPostContent());

        const headings = postContent.match(/<h[2-5][^>]*>([^<]+)<\/h[2-5]>/gi);
        const outline = headings ? headings.map(heading => {
            const level = heading.match(/<h([2-5])/i)[1];
            const content = heading.replace(/<\/?[^>]+(>|$)/g, "");
            const anchor = content.toLowerCase().replace(/\s+/g, '-');
            return createElement(
                'li',
                { className: `outline-level-${level}` },
                level === '2' ? createElement('a', { href: `#${anchor}` }, content) : content
            );
        }) : 'No headings found';

        return createElement(
            'div',
            { ...blockProps },
            createElement('ul', null, outline)
        );
    }
