<?php /** The template for displaying the footer. * @package WordPress * @subpackage Starkers * @since Starkers HTML5 3.0 **/ ?>
	<div id="featureBio">
		<div class="bio-contents">
			<h2>Expert Help with Your Fundraiser</h2>
			<p>Debora Lockhart of Busy Bee Fundraising has over thirty years of fundraising experience, assisting schools and groups in Merced, Madera, Fresno, Kings, and Tulare counties, and she is an exclusive representative of World’s Finest<sup>&reg;</sup> Chocolate in the California Central Valley. </p>
		</div>
	</div>
</main>
<footer>
	<div class="contents">
		<!--<div id="footerLinks">
			<a href="#">Site Map</a> | <a href="#">Our Affiliates</a>
		</div>-->
		<span id="byline">Website by Michael Sweeney</span>
		<div id="nap" itemscope itemtype="http://schema.org/LocalBusiness">
			<span class="name" itemprop="name">Busy Bee Fundraising, Inc.</span>
			<div itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="streetAddress">P.O. Box 441</span><br>
				<span itemprop="addressLocality">Sanger</span>, <span itemprop="addressRegion">CA</span> <span itemprop="postalCode">93657</span>
			</div>
			<span itemprop="telephone">(559) 255-4500</span>
		</div>
		<?php // get_sidebar( 'footer' ); ?>
		<p>&copy; 2013&ndash;<?php echo date("Y") ?> Busy Bee Fundraising, Inc. All rights reserved.</p>
	</div>
</footer>
<script>
// SMOOTH SCROLL
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 750);
        return false;
      }
    }
  });
});
</script>
<?php
	/* Always have wp_footer() just before the closing </body> tag of your theme, or you will break many plugins, which generally use this hook to reference JavaScript files. */
	wp_footer();
?>
</body>
</html>