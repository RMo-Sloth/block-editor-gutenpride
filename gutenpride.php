<?php
/**
 * Plugin Name:       Gutenpride
 * Description:       A demo project
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenpride
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/writing-your-first-block-type/
 */
function create_block_gutenpride_block_init() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'create_block_gutenpride_block_init' );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'gilbert-font', 'https://fonts.googleapis.com/css2?family=Rubik+Beastly&display=swap' );
});

add_action( 'admin_enqueue_scripts', function() {
	wp_enqueue_style( 'gilbert-font', 'https://fonts.googleapis.com/css2?family=Rubik+Beastly&display=swap' );
});
