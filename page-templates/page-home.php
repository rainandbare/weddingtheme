<?php
/**
/* 
Template Name: Home
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main front-page">
			<?php
			while ( have_posts() ) : the_post();?>
				<?php $image = get_the_post_thumbnail_url();?>
			<div class="frontImage" style="background-image: url(<?php echo $image; ?>)">
				<img src=" <?php echo $image; ?> " alt="<?= get_the_post_thumbnail_caption() ?>">
			</div>
			<div class="container">
				<h2 class="tag-line"> <?php the_title(); ?> </h2>
				<?php the_content(); ?>
				<a class="btn" href=" <?php echo get_site_url();?>/about">Tell Me More</a>
			</div>
			<?php
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();