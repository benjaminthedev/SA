<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
                    <?php while ( have_posts() ) : the_post(); ?>                    
                        <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
                        <?php the_content();?>						


							<?php

							// check if the repeater field has rows of data
							if( have_rows('woocommerce_category_boxes') ):?>
						<ul class="woocommerce-products-cats">
								<?php // loop through the rows of data
									while ( have_rows('woocommerce_category_boxes') ) : the_row(); ?>

											<li>
											<img src="<?php the_sub_field('image'); ?>" />
											<?php the_sub_field('title'); ?>
											<?php the_sub_field('link'); ?>
								</li>
								<?php
									endwhile;
									else :
									// no rows found?>
					</ul>
							<?php endif;

						?>				
					<?php endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->


<div class="wrapper">
	<div class="row">
		<div class="col-md-3">
			<h4>Latest News</h4>

		<?php	// WP_Query arguments
		$args = array(
			'posts_per_page' => '5',
			'cat' => 46,
			'order' => 'DESC',
		);
		// The Query
		$query = new WP_Query( $args );?>

<?php // The Loops
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

		<?php the_excerpt(); ?>
			
		
	<?php }
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>
		</div>										
		<div class="col-md-6">
			<h3 class="text-center deals-heading">Special Deals</h3>

	



		</div>										
		<div class="col-md-3">
			<h4>Phil Grabsky's Blog</h4>
		</div>										
	</div>
</div>



	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>
