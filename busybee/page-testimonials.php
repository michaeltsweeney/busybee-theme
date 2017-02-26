<?php
/**
 * Template Name: Testimonials
 * The template for displaying the Testimonials Page.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<main>
	<div class="contents">
		<section>
			<div class="pageintro">
				<?php get_template_part( 'loop', 'page' ); ?>
			</div>
			<?php query_posts('cat=7'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<section class="testimonial">
					<div class="testimonial__quote">
						<?php the_content(); ?>
					</div>
					<div class="testimonial__client">
						<?php the_meta(); ?>
					</div>
				</section>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</section>
		<?php get_sidebar(); ?>
		<a href="#top" class="top">Back to Top</a>
	</div>

<?php get_footer(); ?>
