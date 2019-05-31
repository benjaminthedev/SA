<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="before-footer">
	<div class="container">
		<div class="row">
			  <div class="col-sm-8">
				  <h5>Subscribe to our FREE email Newsletter to stay up to receive up</h5>
			  </div>
			  	<div class="col-sm-4">col-sm-4</div>
		</div>
	</div>
</div>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>




<?php wp_footer(); ?>

</body>

</html>