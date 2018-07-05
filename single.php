<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Carmela_Weddings
 */

get_header(); ?>
<div class="twoColumnContainer blog-main blog-single">
	<div id="primary" class="content-area borderBox stampItRightTop">
		<main id="main" class="site-main">
			<h2 class="page-title">The Blog</h2>
			<?php
			while ( have_posts() ) : the_post();

				// the_post_navigation();
				get_template_part( 'template-parts/content', get_post_type() );


				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div> <!-- #primary  --> 

<?php get_sidebar(); ?>
</div>
<?php get_footer();
