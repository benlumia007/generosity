<?php
/**
 * Default theme setup.
 *
 * This is where all the add_theme_support(); will happen.
 *
 * @package   Generosity
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/generosity
 */

namespace Generosity;

/**
 * Set up theme support.  This is where calls to `add_theme_support()` happen.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'after_setup_theme', function() {

	// Automatically add the `<title>` tag.
	add_theme_support( 'title-tag' );

	// Automatically add feed links to `<head>`.
	add_theme_support( 'automatic-feed-links' );

	// Outputs HTML5 markup for core features.
	add_theme_support( 'html5', [ 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ] );
} );

/**
 * Register menus.
 *
 * @link   https://developer.wordpress.org/reference/functions/register_nav_menus/
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'init', function() {

	register_nav_menus( [
		'primary' => esc_html__( 'Primary Navigation', 'generosity' )
	] );

}, 5 );

/**
 * Register sidebars.
 *
 * @link   https://developer.wordpress.org/reference/functions/register_sidebar/
 * @link   https://developer.wordpress.org/reference/functions/register_sidebars/
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'widgets_init', function() {

	$args = [
		'before_widget' => '<aise id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget_title">',
		'after_title'   => '</h3>'
	];

	$sidebars = [
		[
			'id'   => 'primary',
			'name' => esc_html__ ('Primary', 'generosity' )
		],
		[
			'id'   => 'secondary',
			'name' => esc_html__ ('Secondary', 'generosity' )
		]
	];

	foreach ( $sidebars as $sidebar ) {
		register_sidebar( array_merge( $sidebar, $args ) );
	}
}, 5 );
