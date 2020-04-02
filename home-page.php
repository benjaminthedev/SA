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
											<div class="main-slider">                    
												<?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
											</div>
											
											<?php the_content();?>		
											
											<img src="<?php the_field('home_view_logo'); ?>" alt="Home View Logo" class="home-view-logo" id="home-view-logo"/>
											<h2 class="text-center home-view-heading"><?php the_field('home_view_text'); ?></h2>


					<?php if( have_rows('woocommerce_category_boxes') ):?>
						<ul class="woocommerce-products-cats">
								<?php // loop through the rows of data
									while ( have_rows('woocommerce_category_boxes') ) : the_row();
									
											// vars
											$image = get_sub_field('image');
											$title = get_sub_field('title');
											$link = get_sub_field('link');
											
									
									?>
								<li class="increment">											
								
										<div id="woo-cat-image" style="background-image: url(<?php echo $image; ?>);">
							
											<div class="title-container">
													<?php if( $link ): ?>
														<a href="<?php echo $link; ?>">
													<?php endif; ?>	

															<?php echo $title; ?>

													<?php if( $link ): ?>
													</a>
												<?php endif; ?>

											</div>
										</div>
									
									

					
								</li>
								<?php
									endwhile;
									else :
									// no rows found?>
					</ul>
				<?php endif;?>	
									
				
					<?php endwhile; // end of the loop. ?>
					<?php reset_rows(); ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->


<div class="wrapper">
	<div class="row">
		<div class="col-md-3 latest-news mt-5">
			<h4>Latest News</h4>

		<?php	// WP_Query arguments
		$args = array(
			'posts_per_page' => '2',
			'cat' => 46,
			'order' => 'DESC',
		);
		// The Query
		$query = new WP_Query( $args );?>

<?php // The Loops
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="news-title"><?php the_title(); ?></a>

		<?php the_excerpt(); ?>
			
	<?php }
} else {
	// do nothing.
}
wp_reset_postdata();?>
	</div>										



		<div class="col-md-6">
			<h3 class="text-center deals-heading">Top Sellers</h3>

			<?php if( have_rows('woocommerce_on_sale_boxes') ): ?>
				<ul class="on-sale-featured">

	<?php while( have_rows('woocommerce_on_sale_boxes') ): the_row(); 

		// vars
		$image_product = get_sub_field('image_product');
		$title_product = get_sub_field('title_product');
		$link_product = get_sub_field('link_product');
		$price_product = get_sub_field('price_product');

		?>

		<li>

			<?php if( $link_product ): ?>
				<a href="<?php echo $link_product; ?>">
			<?php endif; ?>

					<?php if( $link_product ): ?>
						<a href="<?php echo $link_product; ?>">
							<img src="<?php echo $image_product['url']; ?>" alt="<?php echo $image_product['alt'] ?>" />
						</a>	
					<?php endif; ?>

			<?php if( $link_product ): ?>
				</a>
			<?php endif; ?>

				<div class="product-info">
		    	<span class="title-product"><?php echo $title_product; ?></span>
					<span class="price"><?php echo $price_product; ?></span>
				</div>
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

		</div>										

		<div class="col-md-3 mt-5">
			<h4>Phil Grabsky's Blog</h4>
				<div class="external-rss-feed">
	 				<?php //echo do_shortcode('[wp_rss_retriever url="https://www.exhibitiononscreenblog.com/blog/?format=rss" items="2" excerpt="25" read_more="true" credits="false" new_window="true" thumbnail="200" cache="7200"]'); ?>

					 <?php if( have_rows('blog') ): ?>

	

	<?php while( have_rows('blog') ): the_row(); 

		// vars
		$title = get_sub_field('title');
		$snippet = get_sub_field('snippet');
		$link = get_sub_field('link');

		?>

		
	<div class="post-home">

		<?php if( $title ): ?>
			<a href="<?php echo $link; ?>" target="_blank"><?php echo $title; ?></a>
		<?php endif; ?>


		    <p><?php echo $snippet; ?>...</p>
			


		<?php if( $link ): ?>
			<a href="<?php echo $link; ?>" target="_blank">Read More »</a>
		<?php endif; ?>

			</div>

		

	<?php endwhile; ?>
		<?php endif; ?>

	 			</div>		 
		</div>										
	</div>
</div>



	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->






<?php get_footer(); ?>
