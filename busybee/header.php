<?php /** The Header for our theme. Displays all of the <head> section. * @package WordPress * @subpackage Starkers * @since Starkers HTML5 3.0 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
		?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" /> -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/style-static.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.simplyscroll.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-42616741-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<?php
		/* We add some JavaScript to pages with the comment form to support sites with threaded comments (when in use). */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		/* Always have wp_head() just before the closing </head> tag of your theme, or you will break many plugins, which generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags. */
		wp_head();
	?>
</head>
<body <?php body_class(); ?>>
<a id="top"></a>
	<header class="pageheader">
		<div class="contents pageheader__contents">
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.busybeefundraising.com/wp-content/themes/busybee/images/logo.png" alt="Busy Bee Fundraising"></a></h1>
			<a href="http://www.busybeefundraising.com/contact/" id="contact">Fresno, CA  (559) 255-4500</a>
		</div>
		<div id="navWrapper" class="nav_bar">
			<div class="contents nav_bar__contents">
				<nav class="primary_nav">
					<ul class="primary_nav__list">
						<li class="primary_nav_item programs">
							<a class="primary_nav_item__link" href="http://www.busybeefundraising.com/fundraising-programs/">Programs</a>
							<ul class="primary_nav_item__submenu dropdown">
								<?php wp_list_pages( 'child_of=5&title_li=' ); ?> 
							</ul>
						</li>
						<li class="information">
							<a href="http://www.busybeefundraising.com/fundraising-information/">Information</a>
							<ul class="dropdown">
								<?php wp_list_pages( 'child_of=7&title_li=' ); ?> 
							</ul>
						</li>
						<li class="about">
							<a href="http://www.busybeefundraising.com/about/">About</a>
							<ul class="dropdown">
								<?php wp_list_pages( 'child_of=12&title_li=' ); ?> 
							</ul>
						</li>
						<li class="contact">
							<a href="http://www.busybeefundraising.com/contact/">Contact</a>
						</li>
					</ul>
				</nav>
				<div id="search">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>