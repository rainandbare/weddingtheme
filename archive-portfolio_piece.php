<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Carmela_Weddings
 */

get_header(); ?>
		<main id="main" class="site-main portfolio-archive">
			<div class="borderBox stampItRightTopBlack">
				<h1 class="page-title">Portfolio & Kind Words</h1>
					<div class="portfolio-container">
					<?php
					if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="single-portfolio">
									<div>
										<div class="featuredPortfolioImage" style="background-image:url(<?php the_post_thumbnail_url( 'large' );?>);" title="<?= get_the_post_thumbnail_caption(); ?>"></div>
										<img class="mobileImage" src="<?php the_post_thumbnail_url( 'large' );?>" alt=" <?= get_the_post_thumbnail_caption(); ?> ">
										<?php the_title( '<h3>', '</h3>' ); ?>
									</div>
								</a>
				<?php	endwhile;
					endif; ?>
				</div>
			</div>
		</main><!-- #main -->
<?php
get_footer();
