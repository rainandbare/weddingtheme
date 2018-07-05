<?php
/**
/* 
Template Name: About
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main about">

			<?php
			while ( have_posts() ) : the_post();?>
			<section class="aboutUs">
				<div class="image1Control" >	
					<?php $image1 = get_field('image_1');?>
					<img src=" <?php echo $image1['url']; ?> " alt="<?php echo $image1['caption']; ?>">
				</div>
				<div class="borderBox">
					<div class="titleLine">
						<div class="preLine"></div>
						<div class="stampIt"></div>
						<h1 class="page-title"><?php the_title(); ?></h1>
						<div class="postLine"></div>
					</div>	
					<div class="aboutContent">
						<img class="mobileImage" src=" <?php echo $image1['url']; ?> " alt="<?php echo $image1['caption']; ?>">
						<?php the_content(); ?>
						<!-- <div class="image2Control" >
						<?php //$image2 = get_field('image_2');?>
							<img src=" <?php// echo $image2['url']; ?> " alt="">	
						</div> -->
						<a class="btn btn2" href="<?php echo get_site_url();?>/our-services">View Our Services</a>
					</div>
				</div>
			</section>
			<section class="theTeam" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?> );">
				<h2>The Team</h2>
				<img class="mobileImage" src="<?php echo get_the_post_thumbnail_url(); ?>">
				<div class="people">
				<?php if( have_rows('meet_us') ):
				    while ( have_rows('meet_us') ) : the_row();?>
					<div class="person">
						<div class="titleLine">
							<div class="preLine"></div>
							<h4>Meet <?php the_sub_field('name'); ?></h4>
							<div class="postLine"></div>
						</div>
						<div class="innerPersonContent">
							<h5>Strengths:</h5>
							<p><?php the_sub_field('strengths_list'); ?></p>
							<h5>Likes:</h5>
							<p><?php the_sub_field('likes_list'); ?></p>
							<h5>Dislikes:</h5>
							<p><?php the_sub_field('dislikes_list'); ?></p>
						</div>
					</div>
				   <?php endwhile; 
				endif; ?>
				</div>
			</section>
			<section class="asSeenOn">
				<h2>As Seen On</h2>
				<div class="logos">
					<?php $logoCollage = get_field('logo_collage'); ?>
					<img src=" <?php echo $logoCollage['url']; ?> " alt="<?php echo $logoCollage['caption']; ?> ">
				</div>
			</section>
			<a href="<?php echo get_site_url();?>/contact" class="btn btn2">Make An Enquiry</a>
			
			<?php 
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
