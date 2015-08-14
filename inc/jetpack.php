<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package CommunityV2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function communityv2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'communityv2_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function communityv2_jetpack_setup
add_action( 'after_setup_theme', 'communityv2_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function communityv2_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function communityv2_infinite_scroll_render
