<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Carmela_Weddings
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>

	<ul>
		<li><h5><span class="label">Email:</span><a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a></h5></li>
		<li><h5><span class="label">Tel:</span><a href="tel:<?php the_field('contact_phone', 'option'); ?>"><?php the_field('contact_phone', 'option'); ?></a></h5></li>
	</ul>
	<section>
		<h4>Find Us on Instagram</h4>
		<div class="oneColumnInsta">
			<?php echo do_shortcode( '[instagram-feed]' ) ?>
		</div>
		<div class="twoColumnInsta">
			<?php echo do_shortcode( '[instagram-feed cols=2]' ) ?>
		</div>
	</section>
</aside><!-- #secondary -->
