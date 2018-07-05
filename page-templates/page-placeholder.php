<?php
/**
/* 
Template Name: Placeholder
*/


get_header('landing'); ?>
	
		<?php
		while ( have_posts() ) : the_post();?>
		<?php $background = get_field('background_image');  ?>
		<div id="primary" style="background-image: url( <?php echo $background['url']; ?>);">
			<main id="main" class="site-main">
				<div class="borderBox">
					<div class="site-branding stampItLanding">
						<div class="flex">
							<div class="logo-top">Carmela</div>
							<div class="spacer"></div>
						</div>
						<div class="logo-bottom">Weddings & Events</div>
					</div><!-- .site-branding -->
					<div class="comingSoonDate"><?php the_content(); ?></div>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php endwhile; // End of the loop. ?>

</div>
<? get_footer('landing');
