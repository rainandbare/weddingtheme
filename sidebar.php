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
	<section class="about">
		<h4>Meet Lisa & Sam</h4>
		<a class="back" href=" <?php echo get_site_url(); ?>/about-us">
			<?php $page_for_posts = get_option( 'page_for_posts' ); ?>
			<?php $aboutImage = get_field('about_us_picture', $page_for_posts); ?>
			<div class="aboutPic" style="background-image: url( <?php echo $aboutImage['url']; ?> );" title="<?php echo $aboutImage['caption']; ?>"></div>
		</a>
	</section>
	<section class="social">
		<?php suzette_social_links();?>
	</section>
	<section class="instagram">
		<h4>Over On Instagram</h4>
		<div class="oneColumnInsta">
			<?php echo do_shortcode( '[instagram-feed]' ) ?>
		</div>
		<div class="twoColumnInsta">
			<?php echo do_shortcode( '[instagram-feed cols=2]' ) ?>
		</div>
	</section>
</aside><!-- #secondary -->
