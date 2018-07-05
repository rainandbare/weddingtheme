<?php
/**
/* 
Template Name: Contact
*/


get_header(); ?>
<div class="twoColumnContainer">
	<div id="primary" class="content-area borderBox">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
				
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar('contact'); ?>
</div>
<?php get_footer(); 
