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
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;?>
	</header><!-- .entry-header -->

	<?php carmelaweddings_post_thumbnail(); ?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php $post_url = get_permalink(); ?>
		<a class="btn" href=" <?php echo $post_url; ?> "> Read the Post </a>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<h6><?php carmelaweddings_entry_footer(); ?></h6>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
