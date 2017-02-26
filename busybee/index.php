<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>

<main id="mainIndex">
	<?php get_template_part( 'loop', 'index' ); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>