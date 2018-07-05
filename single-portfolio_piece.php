<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Carmela_Weddings
 */

get_header(); ?>
		<main id="main" class="site-main portfolio-single">
			<div class="borderContainer stampItRightTopBlack">
				<?php
				while ( have_posts() ) : the_post();?>
					<header>
						<div class="title">
							<?php the_title( '<h1 class="single-portfolio">', '</h1>' ); ?>
							<h3><?php the_field('location'); ?></h3>
						</div>
						<?php $testimonial = get_field('testimonial'); 
							if($testimonial){ ?>
								<p class="testimonial"><?php echo $testimonial; ?></p>
							<?php }; ?>
					</header>

				<?php if( have_rows('gallery') ): while ( have_rows('gallery') ) : the_row();

			        // display a sub field value
			        $image = get_sub_field('image');?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['caption']; ?>">
				<?php
				    endwhile; endif;
				?>

				<?php $photographer = get_field('photographer'); 
							if($photographer){ ?>
								<p class="photographer">Photographer: <?php echo $photographer; ?></p>
							<?php }; ?>
				<?php
				endwhile; // End of the loop.
				?>
			</div>
			<a class="back" href=" <?php echo get_site_url(); ?>/portfolio"><h4>< Back to Portfolio</h4></a>
		</main><!-- #main -->

<?php
get_footer();
