<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Clove
 * @since 0.1
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function clove_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'clove-columns-overlap',
				'label' => esc_html__( 'Overlap', 'clove' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'clove-border',
				'label' => esc_html__( 'Borders', 'clove' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'clove-border',
				'label' => esc_html__( 'Borders', 'clove' ),
			)
		);

		// Image: Shape
		register_block_style(
			'core/image',
			array(
				'name'  => 'clove-image-shape',
				'label' => esc_html__( 'Shape', 'clove' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'clove-border',
				'label' => esc_html__( 'Borders', 'clove' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'clove-image-frame',
				'label' => esc_html__( 'Frame', 'clove' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'clove-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'clove' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'clove-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'clove' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'clove-border',
				'label' => esc_html__( 'Borders', 'clove' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'clove-separator-thick',
				'label' => esc_html__( 'Thick', 'clove' ),
			)
		);
	}
	add_action( 'init', 'clove_register_block_styles' );
}
