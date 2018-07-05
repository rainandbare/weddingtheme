<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Carmela_Weddings
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">	
			<ul class="footerContactInfo">
				<li><h5><span class="label">Email:</span><a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a></h5></li>
				<li><h5><span class="label">Tel:</span><a href="tel:<?php the_field('contact_phone', 'option'); ?>"><?php the_field('contact_phone', 'option'); ?></a></h5></li>
				<li class="socialNavItem"><h5 class="flex"><span class="label">Follow Us On:</span><?php suzette_social_links();?></h5></li>
			</ul>
			<ul class="footerCredits">
				<li><h5 class="smaller">&#xa9; Carmela Wedding - All Rights Reserved</h5></li>
				<li><h5 class="smaller">Branding & Web Design - <a href="http://sarahshuttle.com/">ORLA By Sarah Shuttle</a></h5></li>
			</ul><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
