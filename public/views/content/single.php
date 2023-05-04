
<?php
/**
 * Default default template
 *
 * @package   Succotash
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/luthemes.com
 */
?>
<section id="content" class="site-content">
	<main id="main" class="content-area">
		<?php
			while ( have_posts() ) : the_post();
				Backdrop\Template\View\display( 'entry/single' );
			endwhile;
			comments_template();
		?>
	</main>
	<?php Backdrop\Template\View\display( 'sidebar', 'primary', [ 'location' => 'primary' ] ); ?>
</section>
