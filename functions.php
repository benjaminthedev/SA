<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

/**
 * Proper way to enqueue scripts and styles.
 */
function get_scripts() {
		//Use as template if needed.

		
	//wp_enqueue_script( 'customJSProductPage', get_stylesheet_directory_uri() . '/js/single-product.js', array(), '1.0.0', true );
	//wp_enqueue_style( 'customStyle', get_stylesheet_directory_uri() . '/assets/custom-css.css', array() );

	//Custom Style
	//wp_enqueue_style( 'customStyle', get_stylesheet_directory_uri() . '/custom-style.css', array() );
	wp_enqueue_style( 'newCustomStyles', get_stylesheet_directory_uri() . '/newCustomStyles.css', array(), '1.0.0', true );
	wp_enqueue_style( 'newResponsiveStyles', get_stylesheet_directory_uri() . '/NewResponsive.css', array(), '1.0.0', true );

	//Conditionally Loading The JS for single product
	if (is_product()) {
		wp_enqueue_script( 'customJSProductPage', get_stylesheet_directory_uri() . '/js/single-product.js', array(), '1.0.0', true );
	}

	if (is_page(262)) {
		wp_enqueue_script( 'homeJs', get_stylesheet_directory_uri() . '/js/home-page.js', array(), '1.0.0', true );
	}

	if (is_page(8)) {
		wp_enqueue_script( 'checkoutJS', get_stylesheet_directory_uri() . '/js/checkout.js', array(), '1.0.0', true );
	}
  
	
}
add_action( 'wp_enqueue_scripts', 'get_scripts' );

//Custom Excerpt For WordPress Excerpt
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Read More
function custom_excerpt_more_link($more){
  return '<a href="' . get_the_permalink() . '" rel="nofollow" class="news-read-more">&nbsp;read more »</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more_link');

//Removes the awful [...] from the WordPress Excerpt
function trim_excerpt($text){
	return str_replace(' [...]', '', $text);
}
add_filter('get_the_excerpt', 'trim_excerpt');


function cloudways_short_des_product() {
    the_excerpt();
}

add_action( 'woocommerce_before_shop_loop_item_title', 'cloudways_short_des_product', 40 );



// 
// 
// // Custom Test Quote

function before_the_price(){
	echo '<span class="info-s">DOWNLOAD / STREAM / DVD</span>';
}

add_action(woocommerce_shop_loop_item_title, before_the_price);

//Removes popularity & 

function my_woocommerce_catalog_orderby( $orderby ) {
    unset($orderby["popularity"]);
    unset($orderby["rating"]);
    return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "my_woocommerce_catalog_orderby", 20 );

//short desc
//




// add_action( ‘ocean_after_archive_product_add_to_cart’, ‘custom_after_addtocart’ );
// function custom_after_addtocart() {

// global $product;

// if ( $product->get_short_description() ) {
// echo $product->get_short_description();
// }

// }




//Short code for [quote]
function caption_shortcode( $atts, $content = null ) {
	return '<span class="quote">' . $content . '</span>';
}
add_shortcode( 'quote', 'caption_shortcode' );


//Just show grouped products - do this when you have all products grouped

add_filter( 'woocommerce_product_query_tax_query', 'only_grouped_products', 20, 1 );
function only_grouped_products( $tax_query ){

	if (is_product_category(array( 311, 47, 50, 53))) {
		
		$tax_query[] = array(
        'taxonomy'  => 'product_type',
        'field'     => 'name',
        'terms'     => array('grouped'),
    );
	return $tax_query;

	}	
}



//Outputs terms
// add_filter( 'body_class', 'output_product_cat_on_body' );

// function output_product_cat_on_body( $classes ) {
//   if ( is_singular( 'product' ) ) {
// 		global $post;

// 		$terms = get_the_terms( $post->ID, 'product_cat' );

// 		foreach ( $terms as $term )
// 			$classes[] = 'term-' . $term->slug;
// 	}
// 	return $classes;
// }

add_filter( 'post_class', 'output_product_cat_on_body' );

 function output_product_cat_on_body( $classes, $class, $post_id ) {
    $product = get_product( $post_id );
    if ( $product ) {
        if ( $product->is_on_sale() ) {
            $classes[] = 'sale';
        }
        if ( $product->is_featured() ) {
            $classes[] = 'featured';
		}
		if ( $product->is_type('variable') ) {
			$classes[] = 'type-variable';
		}
        $classes[] = $product->stock_status;
    }
    return $classes;
}




/*
If is grouped product 
then add the class grouped-product



*/

//blah
// function remove_core_updates(){
// global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
// }
// add_filter('pre_site_transient_update_core','remove_core_updates');
// add_filter('pre_site_transient_update_plugins','remove_core_updates');
// add_filter('pre_site_transient_update_themes','remove_core_updates');

  
  
  
