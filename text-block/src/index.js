import { registerBlockType } from '@wordpress/blocks';
import './style.scss';

import attributes from './attributes';
import Edit from './edit';
import save from './save';

registerBlockType( 'gutenberg-blocks-plugin/text-block', {
	attributes,
	edit: Edit,
	save,
} );
