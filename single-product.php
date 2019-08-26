<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php //the_field('video_pop_up'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->


<div id="modal" class="modal fade bd-example-modal-lg mt-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php the_field('video_pop_up'); ?>
    </div>
  </div>
</div>

<div class="wrapper" id="single-wrapper">
	
<section id="headerSliderProduct">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
<?php if( get_field('parallax_image') ): ?>
	<div class="parallax-no single-pro-page" id="clicked-para" data-toggle="modal" style="background-image: url(<?php the_field('parallax_image'); ?>);"></div>
	

 <?php else: ?>

 <div class="parallax-no single-pro-page no-click" data-toggle="modal" id="clicked-para" style="background-image: url('https://wordpress-293167-900918.cloudwaysapps.com/wp-content/uploads/2019/06/EOS-Header.jpg');"></div>
       
							<?php endif; ?>
					
							
</section>


<div class="container p4">							
	
		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					
					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						<header class="entry-header">

							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

							<div class="entry-meta">

								<?php understrap_posted_on(); ?>

							</div><!-- .entry-meta -->

						</header><!-- .entry-header -->

						<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

						<div class="entry-content woocommer-wrapper">

						<div class="product-info-wrap">
					<?php if( get_field('product_image_one') ): ?>
						<div class="product-info-images">
							<img src="<?php the_field('product_image_one'); ?>" />
							<img src="<?php the_field('product_image_two'); ?>" />
						</div>
					<?php endif; ?>


						<div class="product-info">

						<h1 class="ways-heading">Ways To Watch</h1>


						<ul class="ways-to-watch">
							<li class="dvd"><img src="https://wordpress-293167-900918.cloudwaysapps.com/wp-content/uploads/2019/06/DVD-ICON.jpg" class="icons-list"> DVD - A physical copy to your address</li>
							<li class="download"> <img src="https://wordpress-293167-900918.cloudwaysapps.com/wp-content/uploads/2019/06/Download-Icon.jpg" class="icons-list">Download to your computer </li>
							<li class="stream"><img src="https://wordpress-293167-900918.cloudwaysapps.com/wp-content/uploads/2019/06/Stream-Icon.jpg" class="icons-list"> Stream to your device, watch instantly </li>
						</ul>	





						

							<?php
		
								if( have_rows('content') ):

										// loop through the rows of data
										while ( have_rows('content') ) : the_row();

												if( get_row_layout() == 'content_info' ):?>
												<div class="info-text">
													<p><strong><?php the_sub_field('title'); ?></strong></p>
													<p>Running Time: <?php the_sub_field('running_time'); ?></p>
													<p>Screen Size: <?php the_sub_field('screen_size'); ?></p>
													<p><strong>DVD has these subtitle</strong>: <?php the_sub_field('subtitles'); ?></p>
													<p><?php the_sub_field('extra_info'); ?></p>	
												</div>
												<?php 

												endif;

										endwhile;

								else :

										// no layouts found

								endif;

								?>

						</div>

							</div>

							<?php the_content(); ?>

							<?php
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								)
							);
							?>

						</div><!-- .entry-content -->

						<footer class="entry-footer">

							<?php understrap_entry_footer(); ?>

						</footer><!-- .entry-footer -->

					</article><!-- #post-## -->

					

					<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		
		

		</div><!-- .row -->
</div>
	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
