<?php
/*
* Template Name: Home
* The homepage template file
*/

get_header(); ?>

<main id="mainIndex">
	<div id="banner">
		<ul class="slider1">
			<li class="one">
				<div class="slide">
					<h2><em>The Sweet Road to Success:</em> We'd love to help your fundraiser along.</h2>
					<a href="http://www.busybeefundraising.com/information/" class="button">Learn More</a>
				</div>
			</li>
			<li class="two">
				<div class="slide">
					<h2><em>World's Finest&reg; Chocolate:</em> This is fundraising at its sweetest.</h2>
					<a href="http://www.busybeefundraising.com/fundraising-programs/worlds-finest-chocolate/" class="button">See Programs</a>
				</div>
			</li>
			<li class="three">
				<div class="slide">
					<h2><em>Jelly Belly&reg;</em> The Original Gourmet Jelly Bean:<br>
					Known, loved, and more fun than ever.</h2>
					<a href="http://www.busybeefundraising.com/fundraising-programs/jelly-belly/" class="button">See Programs</a>
				</div>
			</li>
		</ul>
		<div id="pager1">
			<a data-slide-index="0" class="pager"></a><a data-slide-index="1" class="pager"></a><a data-slide-index="2" class="pager"></a>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.slider1').bxSlider({
					auto:		'true',
					mode:		'fade',
					pause:		6000,
					speed:		1250,
					controls:	'false',
					autoHover:	'true',
					pagerCustom: '#pager1'
				});
			});
		</script>
	</div>
	<div id="contentWrapper">
		<div class="contents">
			<!--<h2 id="headline">The Latest Buzz: <a href="#">Calling All Baseball, Cheer, Preschool, Church, and Dance Groups!</a></h2>-->
			<ul class="slider2">
				<li><a href="http://www.busybeefundraising.com/fundraising-programs/worlds-finest-chocolate/" class="wfc">World's Finest&reg; Chocolate Fundraising</a></li>
				<li><a href="http://www.busybeefundraising.com/fundraising-programs/jelly-belly/" class="jb">Jelly Belly&reg; Fundraising: The Original Gourmet Jelly Bean</a></li>
				<li><a href="http://www.busybeefundraising.com/fundraising-programs/popcornopolis/" class="pc">Popcornopolis&reg; Fundraising</a></li>
			</ul>
			<?php /* BXSLIDER TEMPORARILY DISABLED -- NOT ENOUGH LOGOS TO REQUIRE TABBING ?>
			<script type="text/javascript">
				var slideNo = Math.floor((Math.random() * 6) + 1);
				$(document).ready(function(){
					$('.slider2').bxSlider({
						startSlide: slideNo,
						auto:		'true',
						pause:		6000,
						speed:		750,
						controls:	'true',
						autoHover:	'true',
						minSlides: 4,
						maxSlides: 4,
						moveSlides: 1,
						slideWidth: 240,
						slideMargin: 0
					});
				});
			</script>

			<?php */ ?>
			<script>
	 			$(document).ready(function(){
				   $("ul.slider2").simplyScroll();
	 			});
			</script>
		</div>
	</div>

<?php get_footer(); ?>