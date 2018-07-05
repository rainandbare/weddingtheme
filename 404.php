<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Carmela_Weddings
 */

get_header(); ?>
		<main id="main" class="site-main">
			<section class="error-404 not-found borderBox stampItRightTopBlack">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'carmelaweddings' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'carmelaweddings' ); ?></p>
					<div class="postOptions flex">
						<div class="recentPosts">
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
						</div>
						<div class="widget widgetCategories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'carmelaweddings' ); ?></h2>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div><!-- .widget -->
					</div>
					<a class="btn btn2" href="<?php echo get_site_url(); ?>/contact">Make an Enquiry</a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
