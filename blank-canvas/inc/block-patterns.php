<?php
/**
 * Block Patterns
 *
 * @package Blank Canvas
 * @since   1.0
 */

if ( ! function_exists( 'blank_canvas_register_block_patterns' ) ) :
	/**
	 * Sets up support for block patterns and unregisters Seedlet's.
	 */
	function blank_canvas_register_block_patterns() {
		/**
		 * Register Block Pattern Category.
		 */
		if ( function_exists( 'register_block_pattern_category' ) ) {

			register_block_pattern_category(
				'blank-canvas',
				array( 'label' => __( 'Blank Canvas', 'blank-canvas' ) )
			);
		}

		/**
		 * Register Block Patterns.
		 */
		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'blank-canvas/about-me',
				array(
					'title'      => __( 'About Me', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:media-text {"mediaPosition":"right","mediaId":1752,"mediaLink":"' . get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg","mediaType":"image","imageFill":true} -->
									<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg);background-position:50% 50%"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg" alt="' . __( 'A photo of a tattooed hand, giving the "I love you" sign.', 'blank-canvas' ) . '" class="wp-image-1752 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"align":"wide"} -->
									<h2 class="alignwide"><strong>' . __( 'Hi! I’m a tattooist based in Florida City.', 'blank-canvas' ) . '</strong></h2>
									<!-- /wp:heading -->
									<!-- wp:paragraph -->
									<p>' . __( 'Specializing in fine line tattoos with a single needle. With over 10 years of experience, I can make your tattoo dreams come true.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#d35069"}},"textColor":"background"} -->
									<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color has-background" style="background-color:#d35069">' . __( 'Get in touch', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->
									<!-- wp:social-links {"className":"is-style-default"} -->
									<ul class="wp-block-social-links is-style-default"><!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /--></ul>
									<!-- /wp:social-links -->
									<!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'blank-canvas/links',
				array(
					'title'      => __( 'Links', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:image {"align":"center","id":20,"width":98,"height":95,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-hat.jpg" alt="' . __( 'Photo of a man wearing a hat.', 'blank-canvas' ) . '" class="wp-image-20" width="98" height="95"/></figure></div>
									<!-- /wp:image -->
									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"34px","lineHeight":"1"}}} -->
									<p class="has-text-align-center" style="font-size:34px;line-height:1"><strong>' . __( 'Alex Fredrickson', 'blank-canvas' ) . '</strong></p>
									<!-- /wp:paragraph -->
									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://linkedin.com/","service":"linkedin"} /-->
									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
									<!-- /wp:social-links -->
									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px","lineHeight":"1.65"}}} -->
									<p class="has-text-align-center" style="font-size:20px;line-height:1.65">' . __( 'My latest and greatest tips, resources, and reads.<br>So much goodness all in one place!', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons {"contentJustification":"center"} -->
									<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"borderRadius":"","width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( 'Must read: The Place That Made Me', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( 'Rain Journal by Richard Johnson', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( '10th Day of Rain', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( 'Blurring the Lines Between Architecture and Nature', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( 'Instant Classic: A story of Persistence', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->',
				)
			);

			register_block_pattern(
				'blank-canvas/invitation',
				array(
					'title'      => __( 'Invitation', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:media-text {"mediaId":2207,"mediaLink":"' . get_stylesheet_directory_uri() . '/assets/pattern-drink.jpg","mediaType":"image","verticalAlignment":"center","imageFill":true,"style":{"color":{"background":"#f5fff4"}}} -->
									<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-image-fill has-background" style="background-color:#f5fff4"><figure class="wp-block-media-text__media" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-drink.jpg);background-position:50% 50%"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-drink.jpg" alt="Photo of two drinks." class="wp-image-2207 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:heading {"level":1,"style":{"color":{"text":"#c61aa7"}}} -->
									<h1 class="has-text-color" style="color:#c61aa7"><strong>' . __( 'You&rsquo;re Invited', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->
									<!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . __( 'Pier 38<br>San Francisco, CA', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->
									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . __( '8pm–12am<br>April 16th', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->
									<!-- wp:separator {"customColor":"#e343cd","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#e343cd;color:#e343cd"/>
									<!-- /wp:separator -->
									<!-- wp:paragraph -->
									<p>' . __( 'Join us for a celebratory party featuring creative cocktails and mocktails, seasonal chef-crafted snacks and appetizers, and a range of desserts and pastries from local bakeries.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#c61aa7"}},"textColor":"background","className":"is-style-fill"} -->
									<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color has-background" style="background-color:#c61aa7">' . __( 'RSVP', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->
									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'blank-canvas/split-screen',
				array(
					'title'      => __( 'Split Screen', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:media-text {"align":"full","mediaId":598,"mediaLink":"' . get_stylesheet_directory_uri() . '/assets/pattern-camera.jpg","mediaType":"image","imageFill":true} -->
									<div class="wp-block-media-text alignfull is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-camera.jpg);background-position:50% 50%"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-camera.jpg" alt="' . __( 'Photo of a vintage camera.', 'blank-canvas' ) . '" class="wp-image-598 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:cover {"overlayColor":"background","minHeight":95,"minHeightUnit":"vh"} -->
									<div class="wp-block-cover has-background-background-color has-background-dim" style="min-height:95vh"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":624,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-woman.jpg" alt="' . __( 'Photo of a woman.', 'blank-canvas' ) . '" class="wp-image-624" width="200" height="200"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1} -->
									<h1 class="has-text-align-center"><strong>' . __( 'Jasmine Baker', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","backgroundColor":"background"} -->
									<p class="has-text-align-center has-background-background-color has-background">' . __( 'Hello! I am a photographer and designer living near Portland, Maine. When I am not posting to Instagram, you can find me shooting weddings and portraits.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

									<!-- wp:social-link {"url":"https://www.tiktok.com","service":"tiktok"} /-->

									<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

									<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /--></ul>
									<!-- /wp:social-links --></div></div>
									<!-- /wp:cover --></div></div>
									<!-- /wp:media-text -->',
				)
			);
		}

		/**
		 * Unregister Seedlet Block Pattern Category.
		 */
		if ( function_exists( 'unregister_block_pattern_category' ) ) {
			unregister_block_pattern_category( 'seedlet' );
		}

		/**
		 * Unregister Block Patterns from Seedlet.
		 */
		if ( function_exists( 'unregister_block_pattern' ) ) {
			unregister_block_pattern( 'seedlet/group-split-background' );
			unregister_block_pattern( 'seedlet/group-image-overlap' );
			unregister_block_pattern( 'seedlet/latest-posts-alternating-grid' );
		}
	}
endif;
add_action( 'after_setup_theme', 'blank_canvas_register_block_patterns', 12 );
