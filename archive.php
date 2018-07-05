<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Carmela_Weddings
 */

get_header(); ?>
<div class="twoColumnContainer blog-main">
	<div id="primary" class="content-area borderBox">
		<main id="main" class="site-main">
			<?php
			if ( have_posts() ) : ?>
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						// the_archive_description( '<div class="archive-description">', '</div>' );
					?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-blog', get_post_format() );

				endwhile;

				//the_posts_navigation();
				wpbeginner_numeric_posts_nav();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
</div>
<?php get_footer();
