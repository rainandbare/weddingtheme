<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Carmela_Weddings
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<!-- <div class="entry-meta">
			<?php
				//carmelaweddings_posted_on();
				//carmelaweddings_posted_by();
			?>
		</div><!-- .entry-meta --> 
		<?php
		endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content(); ?>
		<?php if(get_field('photography_credits')){?>
			<div class="photographyCredits">
				<h4>Photography Credits (in order shown)</h4>
				<?php the_field('photography_credits'); ?>
			</div>
			
		<?php } ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="footer-options">
			<h6><?php carmelaweddings_entry_footer(); ?></h6>
			<div class="share"><h6>Share on:</h6> <?php echo do_shortcode('[Sassy_Social_Share]'); ?></div>
		</div>
		<a class="back" href="<?php echo get_site_url(); ?>/blog"><h4>< Back to Blog</h4></a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php //the_ID(); ?> -->
