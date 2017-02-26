<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<main>
	<div class="contents">
		<section>
			<?php if ( have_posts() ) : ?>
					<h1><?php printf( __( 'Search Results for: %s', 'busybee' ), '' . get_search_query() . '' ); ?></h1>
						<?php
							get_template_part( 'loop', 'search' );
						?>
			<?php else : ?>
					<h2><?php _e( 'Nothing Found', 'busybee' ); ?></h2>
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'busybee' ); ?></p>
						<?php get_search_form(); ?>
			<?php endif; ?>
		</section>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>