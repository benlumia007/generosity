<?php
/**
 * Theme - Site
 *
 * @package   Generosity
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/generosity
 */

/**
 * Define namespace
 */
namespace Generosity\Site;

/**
 * Output the ClassicPress Link HTML.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function display_cp_link( array $args = [] ) {

	echo render_cp_link( $args );
}

/**
 * Returns the ClassicPress Link HTML.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function render_cp_link( array $args = [] ) {

	$args = wp_parse_args( $args, [
		'text'   => '%s',
		'class'  => 'cp-link',
		'before' => '',
		'after'  => '',
	] );

	$html = sprintf(
		'<a class="%1$s" href="%2$s">%3$s</a>',
		esc_attr( $args['class'] ),
		esc_url( __( 'https://classicpress.net', 'generosity' ) ),
		sprintf( $args['text'], esc_html__( 'ClassicPress', 'generosity' ) )
	);
	return apply_filters( 'generosity/render/cp/link', $html );
}
