import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder, TextControl } from '@wordpress/components';
import './editor.scss';

export default function Edit( { attributes, className, setAttributes, isSelected } ) {

	let content;
	if( !isSelected && attributes.message ) {
		content = <div>{ attributes.message }</div>;
	} else {
		content = (
			<Placeholder
				label = { __( 'Gutenpride Block', 'gutenpride' ) }
				instructions = { __( 'Add your message', 'gutenpride' ) }
			>
				<TextControl 
					label = { __( 'Message', 'gutenpride' ) }
					value = { attributes.message }
					onChange = { ( val ) => setAttributes( { message: val } ) }
				/>
			</Placeholder>
		);
	}

	return (
		<div {...useBlockProps()}>
			{ content }
		</div>
	);
}
