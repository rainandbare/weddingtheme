<?php
/**
/* 
Template Name: Services
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main service-page">

			<?php
			while ( have_posts() ) : the_post();?>
				<?php $services = get_field('our_services_background_image'); ?>
				<section id="our-services" style="background-image: url( <?php echo $services['url']; ?> );">
					<div class="serviceBox">
						<div class="titleLine">
							<div class="preLine"></div>
							<h1 class="page-title"><?php the_title(); ?></h1>
							<div class="postLine"></div>
						</div>
						<div class="innerServiceWrapper">
							<?php the_field('our_services_content'); ?>
							
						</div>
					</div>
					<div class="actionBox">
						<h3>Discover:</h3>
						<button class="btn btn2 smoothScroll" data-link="uk-weddings">UK Weddings</button>
						<button class="btn btn2 smoothScroll" data-link="international-weddings">International Weddings</button>
						<button class="btn btn2 smoothScroll" data-link="bespoke-events">Bespoke Events</button>
					</div>
				</section>
				<img class="mobileImage mobileImageServices" src="<?php echo $services['url']; ?>" alt="<?php echo $services['caption']; ?>"/>
				<section id="uk-weddings">
					<div class="serviceBox">
						<h2>UK Weddings</h2>
						<div class="innerServiceWrapper">
							<?php the_field('uk_weddings_content'); ?>
							<div class="buttonBox">
								<a class="btn btn2" href="<?php echo get_site_url(); ?>/contact">Make an Enquiry</a>
							</div>
						</div>
					</div>
				</section>
				<?php $international = get_field('international_weddings_background_image'); ?>
				<section id="international-weddings" class="international-weddings" style="background-image: url( <?php echo $international['url']; ?> );">
					<img class="mobileImage" src="<?php echo $international['url']; ?>"/>
					<div class="serviceBox">
						<h2>International Weddings</h2>
						<div class="innerServiceWrapper">
							<?php the_field('international_weddings_content'); ?>
							<a class="btn btn2" href="<?php echo get_site_url(); ?>/contact">Make an Enquiry</a>
						</div>
					</div>
				</section>
				<?php $bespoke = get_field('bespoke_events_background_image'); ?>
				<section id="bespoke-events" style="background-image: url( <?php echo $bespoke['url']; ?> );">
					<div class="serviceBox modernImageStampActually">
						<h2>Bespoke Events</h2>
						<div class="innerServiceWrapper">
							<?php the_field('bespoke_events_content'); ?>
							<a class="btn btn2" href="<?php echo get_site_url(); ?>/contact">Get in touch</a>
						</div>
					</div>
				</section>
				
			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
