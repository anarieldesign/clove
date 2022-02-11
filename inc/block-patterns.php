<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Clove
 * @since 0.1
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'clove',
		array( 'label' => esc_html__( 'Clove Blocks', 'clove' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

		// Cover/Hero Image
		register_block_pattern(
			'clove/cover',
			array(
				'title'         => esc_html__( 'Cover/Hero', 'clove' ),
				'categories'    => array( 'clove' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'A cover image with site logo and menu at the top', 'Block pattern description', 'clove' ),
				'content'       => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-image.jpeg","dimRatio":0,"minHeight":100,"minHeightUnit":"vh","align":"full","className":"clove-hero"} -->
				<div class="wp-block-cover alignfull clove-hero" style="min-height:100vh"><img class="wp-block-cover__image-background" src="' . esc_url( get_theme_file_uri( 'assets/images/hero-image.jpeg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","backgroundColor":"background","className":"is-style-default","layout":{"inherit":true}} -->
				<div class="wp-block-group alignwide is-style-default has-background-background-color has-background"><!-- wp:spacer {"height":40} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:cover {"customOverlayColor":"#e3ead2"} -->
				<div class="wp-block-cover has-background-dim" style="background-color:#e3ead2"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","width":201,"height":201,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/bird.jpeg' ) ) . '" alt="" width="201" height="201"/></figure></div>
				<!-- /wp:image --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"textColor":"secondary"} -->
				<h2 class="has-secondary-color has-text-color"><strong>' . esc_html_x( 'A lovely day in the nature', 'sample content', 'clove' ) . '</strong></h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"textColor":"secondary"} -->
				<p class="has-primary-color has-text-color">' . esc_html_x( 'The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or essential qualities, innate disposition, and in ancient times, literally meant birth.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"textColor":"secondary","style":{"color":{"background":"#e3ead2"},"border":{"radius":50}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-secondary-color has-text-color has-background" style="border-radius:50px;background-color:#e3ead2">' . esc_html_x( 'Read More', 'Theme starter content', 'clove' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group --></div></div>
				<!-- /wp:cover -->',
			)
		);

		// Three Quotes Images
		register_block_pattern(
			'clove/three-quotes',
			array(
				'title'         => esc_html__( 'Three Quotes Images', 'clove' ),
				'categories'    => array( 'clove' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'Three quotes with images', 'Block pattern description', 'clove' ),
				'content'       => '<!-- wp:group {"align":"wide","className":"clove-testimonials","layout":{"inherit":true}} -->
				<div class="wp-block-group alignwide clove-testimonials"><!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background"><!-- wp:cover {"customOverlayColor":"#efeade","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px;background-color:#efeade"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":64,"width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/testimonial-1.jpeg' ) ) . '" alt="" class="wp-image-64" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#4c3843"><strong>' . esc_html_x( 'Just an ounce of prevention makes perfect.', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4c3843"},"typography":{"fontSize":"14px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#4c3843;font-size:14px">' . esc_html_x( '— Margarit Avagyan', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:separator {"customColor":"#ceaf9b","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#ceaf9b;color:#ceaf9b"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background"><!-- wp:cover {"customOverlayColor":"#e3ead2","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px;background-color:#e3ead2"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":63,"width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/testimonial-2.jpeg' ) ) . '" alt="" class="wp-image-63" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#535148"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#535148"><strong>' . esc_html_x( 'Just an ounce of prevention makes perfect.', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#535148"},"typography":{"fontSize":"14px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#535148;font-size:14px">' . esc_html_x( '— Margarit Avagyan', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:separator {"customColor":"#a3ba6c","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#a3ba6c;color:#a3ba6c"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background">
				
				<!-- wp:cover {"overlayColor":"quinary","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-quinary-background-color has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":62,"width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/testimonial-3.jpeg' ) ) . '" alt="" class="wp-image-62" width="200" height="289"/></figure></div>
				<!-- /wp:image -->

				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#54483d"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#54483d"><strong>Just an ounce of prevention makes perfect.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"color":{"text":"#54483d"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#54483d;font-size:14px">— Margarit Avagyan</p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"customColor":"#ccb974","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#ccb974;color:#ccb974"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
			)
		);

		// Grid
		register_block_pattern(
			'clove/grid',
			array(
				'title'         => esc_html__( 'Grid', 'clove' ),
				'categories'    => array( 'clove' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'Three column grid with images', 'Block pattern description', 'clove' ),
				'content'       => '<!-- wp:group {"align":"full","style":{"color":{"background":"#e3ead2"}},"textColor":"foreground","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-foreground-color has-text-color has-background" style="background-color:#e3ead2"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/grid-1.jpeg' ) ) . '" alt=""/></figure>
				<!-- /wp:image -->
				
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#4c3843"}},"fontSize":"extra-large"} -->
				<h3 class="has-text-color has-extra-large-font-size" style="color:#4c3843"><strong>' . esc_html_x( 'Kind', 'sample content', 'clove' ) . '</strong></h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-color" style="color:#4c3843">' . esc_html_x( 'The word animal comes from the Latin animalis, meaning having breath, having soul or living being. The word animal comes from the Latin animalis, meaning having breath, having soul or living being.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-color" style="color:#4c3843"><a href="#">Read More</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:spacer {"height":50} -->
				<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#4c3843"}},"fontSize":"extra-large"} -->
				<h3 class="has-text-color has-extra-large-font-size" style="color:#4c3843"><strong>' . esc_html_x( 'Playful', 'sample content', 'clove' ) . '</strong></h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-color" style="color:#4c3843">' . esc_html_x( 'The word animal comes from the Latin animalis, meaning having breath, having soul or living being.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-color" style="color:#4c3843"><a href="#">Learn more</a></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/grid-2.jpeg' ) ) . '" alt="" /></figure>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/grid-3.jpeg' ) ) . '" alt="" /></figure>
				<!-- /wp:image -->
				
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/grid-4.jpeg' ) ) . '" alt="" /></figure>
				<!-- /wp:image -->
				
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#4c3843"}},"fontSize":"extra-large"} -->
				<h3 class="has-text-color has-extra-large-font-size" style="color:#4c3843"><strong>' . esc_html_x( 'Smart', 'sample content', 'clove' ) . '</strong></h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-color" style="color:#4c3843">' . esc_html_x( 'The word animal comes from the Latin animalis, meaning having breath, having soul or living being.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-color" style="color:#4c3843"><a href="#">' . esc_html_x( 'Take Action', 'sample content', 'clove' ) . '</a></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:spacer {"height":10} -->
				<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				
				<!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
			)
		);

		// About Columns
		register_block_pattern(
			'clove/about-columns',
			array(
				'title'         => esc_html__( 'About Columns', 'clove' ),
				'categories'    => array( 'clove' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'About four columns with images', 'Block pattern description', 'clove' ),
				'content'       => '<!-- wp:group {"align":"wide","className":"clove-info","layout":{"inherit":false,"contentSize":"1240px"}} -->
				<div class="wp-block-group alignwide clove-info"><!-- wp:columns {"className":"clove-4-column"} -->
				<div class="wp-block-columns clove-4-column"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
				<div class="wp-block-image is-style-default"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/about-1.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
				<h2 class="has-text-align-center has-large-font-size"><strong>' . esc_html_x( 'About Me', 'sample content', 'clove' ) . '</strong></h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><a href="#">' . esc_html_x( 'BIOGRAPHY', 'sample content', 'clove' ) . '</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
				<div class="wp-block-image is-style-default"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/about-2.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
				<h2 class="has-text-align-center has-large-font-size"><strong>' . esc_html_x( 'My Work', 'sample content', 'clove' ) . '</strong></h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><a href="#">' . esc_html_x( 'PORTFOLIO', 'sample content', 'clove' ) . '</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
				<div class="wp-block-image is-style-default"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/about-3.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
				<h2 class="has-text-align-center has-large-font-size"><strong>' . esc_html_x( 'My Process', 'sample content', 'clove' ) . '</strong></h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><a href="#">' . esc_html_x( 'JOURNAL', 'sample content', 'clove' ) . '</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
				<div class="wp-block-image is-style-default"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/about-4.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
				
				<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
				<h2 class="has-text-align-center has-large-font-size"><strong>' . esc_html_x( 'Exhibitions', 'sample content', 'clove' ) . '</strong></h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><a href="#">' . esc_html_x( 'EXHIBITION', 'sample content', 'clove' ) . '</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
			)
		);

		// Full Width Grid
		register_block_pattern(
			'clove/full-width-grid',
			array(
				'title'         => esc_html__( 'Full Width Grid', 'clove' ),
				'categories'    => array( 'clove' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'Full width grid with quotes and images', 'Block pattern description', 'clove' ),
				'content'       => '<!-- wp:group {"align":"full","className":"clove-grid"} -->
				<div class="wp-block-group alignfull clove-grid"><!-- wp:columns {"align":"wide","className":"is-style-default"} -->
				<div class="wp-block-columns alignwide is-style-default"><!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background"><!-- wp:cover {"customOverlayColor":"#efeade","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px;background-color:#efeade"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/full-grid-1.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
						
				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#4c3843"><strong>' . esc_html_x( 'Just an ounce of prevention makes perfect.', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4c3843"},"typography":{"fontSize":"14px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#4c3843;font-size:14px">' . esc_html_x( '— Margarit Avagyan', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
						
				<!-- wp:separator {"customColor":"#ceaf9b","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#ceaf9b;color:#ceaf9b"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
						
				<!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background"><!-- wp:cover {"customOverlayColor":"#e3ead2","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px;background-color:#e3ead2"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/full-grid-2.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
						
				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#535148"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#535148"><strong>' . esc_html_x( 'Just an ounce of prevention makes perfect.', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#535148"},"typography":{"fontSize":"14px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#535148;font-size:14px">' . esc_html_x( '— Margarit Avagyan', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
						
				<!-- wp:separator {"customColor":"#a3ba6c","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#a3ba6c;color:#a3ba6c"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
						
				<!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background"><!-- wp:cover {"overlayColor":"quaternary","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-quaternary-background-color has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/full-grid-3.jpeg' ) ) . '" alt=""  width="200" height="289"/></figure></div>
				<!-- /wp:image -->
						
				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#54483d"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#54483d"><strong>' . esc_html_x( 'Just an ounce of prevention makes perfect.', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
						
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"color":{"text":"#54483d"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#54483d;font-size:14px">' . esc_html_x( '— Margarit Avagyan', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
						
				<!-- wp:separator {"customColor":"#ccb974","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#ccb974;color:#ccb974"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
						
				<!-- wp:columns {"align":"wide","className":"is-style-default"} -->
				<div class="wp-block-columns alignwide is-style-default"><!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background"><!-- wp:cover {"overlayColor":"quaternary","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-quaternary-background-color has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/full-grid-4.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
						
				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4c3843"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#4c3843"><strong>' . esc_html_x( 'Just an ounce of prevention makes perfect.', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#4c3843"},"typography":{"fontSize":"14px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#4c3843;font-size:14px">' . esc_html_x( '— Margarit Avagyan', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
						
				<!-- wp:separator {"customColor":"#ceaf9b","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#ceaf9b;color:#ceaf9b"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
						
				<!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background"><!-- wp:cover {"overlayColor":"quinary","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-quinary-background-color has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/full-grid-5.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
						
				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#535148"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#535148"><strong>' . esc_html_x( 'Just an ounce of prevention makes perfect.', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#535148"},"typography":{"fontSize":"14px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#535148;font-size:14px">' . esc_html_x( '— Margarit Avagyan', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
						
				<!-- wp:separator {"customColor":"#a3ba6c","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#a3ba6c;color:#a3ba6c"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
						
				<!-- wp:column {"verticalAlignment":"top","className":"has-background"} -->
				<div class="wp-block-column is-vertically-aligned-top has-background"><!-- wp:cover {"overlayColor":"tertiary","align":"full","style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"20px","left":"20px"}}}} -->
				<div class="wp-block-cover alignfull has-tertiary-background-color has-background-dim" style="padding-top:40px;padding-right:20px;padding-bottom:20px;padding-left:20px"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","width":200,"height":289,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/full-grid-6.jpeg' ) ) . '" alt="" width="200" height="289"/></figure></div>
				<!-- /wp:image -->
						
				<!-- wp:spacer {"height":5} -->
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
						
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#54483d"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#54483d"><strong>' . esc_html_x( 'Just an ounce of prevention makes perfect.', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
						
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"color":{"text":"#54483d"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#54483d;font-size:14px">' . esc_html_x( '— Margarit Avagyan', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
						
				<!-- wp:separator {"customColor":"#ccb974","align":"wide","className":"is-style-dots"} -->
				<hr class="wp-block-separator alignwide has-text-color has-background is-style-dots" style="background-color:#ccb974;color:#ccb974"/>
				<!-- /wp:separator --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
			)
		);

		// Pricing
		register_block_pattern(
			'clove/pricing',
			array(
				'title'         => esc_html__( 'Pricing', 'clove' ),
				'categories'    => array( 'clove' ),
				'viewportWidth' => 900,
				'description'   => esc_html_x( 'Three columns pricing tables', 'Block pattern description', 'clove' ),
				'content'       => '<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/pricing-1.jpeg","dimRatio":0} -->
				<div class="wp-block-cover"><img class="wp-block-cover__image-background" src="' . esc_url( get_theme_file_uri( 'assets/images/pricing-1.jpeg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"backgroundColor":"quaternary","textColor":"secondary"} -->
				<div class="wp-block-group has-secondary-color has-quaternary-background-color has-text-color has-background"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
				<h2 class="has-text-align-center" style="font-size:40px"><strong>' . esc_html_x( 'Nature', 'sample content', 'clove' ) . '</strong></h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size" style="line-height:1.5"><strong>' . esc_html_x( 'starter', 'sample content', 'clove' ) . '</strong> ' . esc_html_x( 'package', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"26px"}}} -->
				<p class="has-text-align-center" style="font-size:26px"><strong>' . esc_html_x( '$10 / year', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide"/>
				<!-- /wp:separator -->
				
				<!-- wp:list {"textColor":"secondary","fontSize":"small"} -->
				<ul class="has-secondary-color has-text-color has-small-font-size"><li>' . esc_html_x( 'General admission and member discounts for one adult', 'sample content', 'clove' ) . '</li><li>' . esc_html_x( 'One free ticket per special exhibition', 'sample content', 'clove' ) . '</li><li>' . esc_html_x( 'Two single-use guest passes per year', 'sample content', 'clove' ) . '</li></ul>
				<!-- /wp:list -->
				
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"secondary","style":{"border":{"radius":50}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-secondary-background-color has-background" style="border-radius:50px">' . esc_html_x( 'buy now', 'sample content', 'clove' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/pricing-2.jpeg","dimRatio":0} -->
				<div class="wp-block-cover"><img class="wp-block-cover__image-background" src="' . esc_url( get_theme_file_uri( 'assets/images/pricing-2.jpeg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"backgroundColor":"tertiary","textColor":"secondary"} -->
				<div class="wp-block-group has-secondary-color has-tertiary-background-color has-text-color has-background"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
				<h2 class="has-text-align-center" style="font-size:40px"><strong>Contributor</strong></h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size" style="line-height:1.5"><strong>' . esc_html_x( 'starter', 'sample content', 'clove' ) . '</strong> ' . esc_html_x( 'package', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"26px"}}} -->
				<p class="has-text-align-center" style="font-size:26px"><strong>' . esc_html_x( '$30 / year', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide"/>
				<!-- /wp:separator -->
				
				<!-- wp:list {"textColor":"secondary","fontSize":"small"} -->
				<ul class="has-secondary-color has-text-color has-small-font-size"><li>' . esc_html_x( 'General admission and member discounts for one adult', 'sample content', 'clove' ) . '</li><li>' . esc_html_x( 'One free ticket per special exhibition', 'sample content', 'clove' ) . '</li><li>' . esc_html_x( 'Two single-use guest passes per year', 'sample content', 'clove' ) . '</li></ul>
				<!-- /wp:list -->
				
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"secondary","style":{"border":{"radius":50}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-secondary-background-color has-background" style="border-radius:50px">' . esc_html_x( 'buy now', 'sample content', 'clove' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/pricing-3.jpeg","dimRatio":0} -->
				<div class="wp-block-cover"><img class="wp-block-cover__image-background" src="' . esc_url( get_theme_file_uri( 'assets/images/pricing-3.jpeg' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"backgroundColor":"quinary","textColor":"secondary"} -->
				<div class="wp-block-group has-secondary-color has-quinary-background-color has-text-color has-background"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
				<h2 class="has-text-align-center" style="font-size:40px"><strong>Nature</strong></h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size" style="line-height:1.5"><strong>' . esc_html_x( 'starter', 'sample content', 'clove' ) . '</strong> ' . esc_html_x( 'package', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"26px"}}} -->
				<p class="has-text-align-center" style="font-size:26px"><strong>' . esc_html_x( '$60 / year', 'sample content', 'clove' ) . '</strong></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:separator {"color":"secondary","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-secondary-background-color has-secondary-color is-style-wide"/>
				<!-- /wp:separator -->
				
				<!-- wp:list {"textColor":"secondary","fontSize":"small"} -->
				<ul class="has-secondary-color has-text-color has-small-font-size"><li>' . esc_html_x( 'General admission and member discounts for one adult', 'sample content', 'clove' ) . '</li><li>' . esc_html_x( 'One free ticket per special exhibition', 'sample content', 'clove' ) . '</li><li>' . esc_html_x( 'Two single-use guest passes per year', 'sample content', 'clove' ) . '</li></ul>
				<!-- /wp:list -->
				
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"secondary","style":{"border":{"radius":50}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-secondary-background-color has-background" style="border-radius:50px">' . esc_html_x( 'buy now', 'sample content', 'clove' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group --></div></div>
				<!-- /wp:cover --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->',
			)
		);


		// About Intro
		register_block_pattern(
			'clove/about-intro',
			array(
				'title'         => esc_html__( 'About Intro', 'clove' ),
				'categories'    => array( 'clove' ),
				'viewportWidth' => 1440,
				'description'   => esc_html_x( 'Intro with the text and button plus two column images', 'Block pattern description', 'clove' ),
				'content'       => '<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"96px","lineHeight":"1"}}} -->
				<p class="has-text-align-center" style="font-size:96px;line-height:1">' . esc_html_x( 'Cloves Prints', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px"}}} -->
				<p class="has-text-align-center" style="font-size:22px">' . esc_html_x( 'Printed in Tokyo, Japan and made of 100% organic cotton rag paper. Available for a limited time.', 'sample content', 'clove' ) . '</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"style":{"color":{"background":"#e3ead2","text":"#535148"},"border":{"radius":50}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background" style="border-radius:50px;background-color:#e3ead2;color:#535148">' . esc_html_x( 'Read More', 'sample content', 'clove' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
				
				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:spacer {"height":60} -->
				<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"full"} -->
				<div class="wp-block-columns alignfull"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:spacer {"height":90} -->
				<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:image {"id":94,"width":1120,"height":1470,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/about-intro-1.jpeg' ) ) . '" alt="" class="wp-image-94" width="1120" height="1470"/></figure>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":60,"width":1115,"height":1487,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
				<figure class="wp-block-image size-large is-resized is-style-default"><img src="' . esc_url( get_theme_file_uri( 'assets/images/about-intro-2.jpeg' ) ) . '" alt="" class="wp-image-60" width="1115" height="1487"/></figure>
				<!-- /wp:image --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->',
			)
		);
}