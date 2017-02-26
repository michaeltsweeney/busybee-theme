<?php /** The Sidebar containing the primary and secondary widget areas. * @package WordPress * @subpackage Starkers * @since Starkers HTML5 3.0 */ ?>

<aside>
  <?php // START SUBPAGE MENU
    if($post->post_parent) {
		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
		$parent_link = get_permalink($post->post_parent);
	} else {
		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	}
    if ($children) { ?>
		<nav>
			<h2><a href="<?php echo $parent_link; ?>"><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></a></h2>
			<ul>
			<?php echo $children; ?>
			</ul>
		</nav>
		
  <?php } // END SUBPAGE MENU ?>

	<?php
		// A second sidebar for widgets, just because.
		if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
			<ul>
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
	<?php endif; ?>
	
</aside>