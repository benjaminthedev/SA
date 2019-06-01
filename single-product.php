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
<?php if( get_field('parallax_image') ): ?>
	<div class="parallax" id="clicked-para" style="background-image: url(<?php the_field('parallax_image'); ?>);"></div>
<?php endif; ?>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	
	<div class="embed-container">
		<?php the_field('video_pop_up'); ?>
	</div>
  </div>

</div>




<script>


</script>


<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

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

						<div class="product-info-images">
							<img src="<?php the_field('product_image_one'); ?>" />
							<img src="<?php the_field('product_image_two'); ?>" />
						</div>


						<div class="product-info">
							<?php
		
								if( have_rows('content') ):

										// loop through the rows of data
										while ( have_rows('content') ) : the_row();

												if( get_row_layout() == 'content_info' ):?>
												<div class="info-text">
													<p><strong><?php the_sub_field('title'); ?></strong></p>
													<p><?php the_sub_field('running_time'); ?></p>
													<p><?php the_sub_field('screen_size'); ?></p>
													<p><?php the_sub_field('subtitles'); ?></p>
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

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>