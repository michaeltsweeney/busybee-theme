<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<main>
	<div class="contents">
		<section>
			<?php get_template_part( 'loop', 'page' ); ?>
		</section>
		<?php get_sidebar(); ?>
		<a href="#top" class="top">Back to Top</a>
	</div>

<?php get_footer(); ?>
