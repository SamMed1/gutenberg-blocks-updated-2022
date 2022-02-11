import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './style.scss';

const TEMPLATE = [ [ 'core/cover' ], [ 'core/image' ] ];

import { RichText } from '@wordpress/block-editor';

export default function Edit( { attributes, setAttributes, className } ) {
	const blockProps = useBlockProps();
	return (
		<p { ...blockProps }>
			<RichText
				tagName="h3"
				value={ attributes.title }
				onChange={ ( title ) => setAttributes( { title } ) }
				placeholder={ __( 'Image block content', 'gutenberg' ) }
			/>
		</p>
	);
}
