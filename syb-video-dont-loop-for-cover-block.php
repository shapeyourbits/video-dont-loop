<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Plugin Name: SYB - Video Don't Loop for Cover Block
 * Plugin URI: https://www.shapeyourbits.co.uk/plugins/video-no-loop/
 * Description: Removes the loop attribute from videos inside a core Cover block when the block has "noloop" CSS class in the Additional CSS class(es).
 * Version: 1.0.0
 * Author: ShapeYourBits
 * Author URI: https://www.shapeyourbits.co.uk/
 * Text Domain: syb-video-dont-loop-for-cover-block
 * License: GPL2
 */

add_filter( 'render_block_core/cover', function ( $block_content ) {
	if ( str_contains( $block_content, 'noloop' ) ) {
		$block_content = preg_replace(
			'/<video([^>]*)\s+loop(?:="[^"]*")?([^>]*)>/',
			'<video$1$2>',
			$block_content
		);
	}
	return $block_content;
} );
