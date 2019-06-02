<?php
/**
 * Template Name: Two Column Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

<div class="wrapper" id="page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			

        <div class="col-md-6">
            <?php
                if( have_rows('left_content') ):
                    // loop through the rows of data
                    while ( have_rows('left_content') ) : the_row();
                        if( get_row_layout() == 'left_content' ):?>
                            <h2><?php the_sub_field('heading');?></h2>
                        <?php the_sub_field('content_left');
                        endif;
                    endwhile;
                else :
                endif;
            ?>
        </div>

        <div class="col-md-6">
            <?php
                if( have_rows('right_content') ):
                    // loop through the rows of data
                    while ( have_rows('right_content') ) : the_row();
                        if( get_row_layout() == 'right_content' ):?>
                            <h2><?php the_sub_field('heading');?></h2>
                        <?php the_sub_field('right_content');
                        endif;
                    endwhile;
                else :
                endif;
            ?>
        </div>







			


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
