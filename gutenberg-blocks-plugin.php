<?php
/**
 * Plugin Name:       Gutenberg blocks plugin
 * Description:       Updated gutenberg blocks starter plugin
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.0.1
 * Author:            Sam Medhurst
 * License:           test-license
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenberg-blocks-plugin
 *
 * @package           gutenberg-blocks-plugin
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function gutenberg_blocks_plugin_init() {
	register_block_type( __DIR__ . '/image-block/build' );
	register_block_type( __DIR__ . '/text-block/build' );
}
add_action( 'init', 'gutenberg_blocks_plugin_init' );
