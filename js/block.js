const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

registerBlockType( 'myjsxblock/first', {
	title: __( 'Gutunburg Example with JSX' ),
	icon: 'lock',
	category: 'common',
	edit() {
		return (
			<p>Gutunburg block example built with JSX.</p>
		);
	},
	save() {
		return (
			<p>Gutunburg block example built with JSX.</p>
		);
	},
} );