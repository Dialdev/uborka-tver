<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop, $product_cat ;


//print_r($product_cat);
//echo $product->id;
// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';

$classes[] = 'one-product clearfix';	


// add tag slugs
$data_tags = array();
$tags = get_the_terms( $product->id, 'product_tag' );
if ( ! empty( $tags ) ) {
    foreach ( $tags as $key => $value ) {
        //print_r($value);
        if( strpos( $value->slug, 'brand-' ) !== false  ){
            $brand_tags = $value->name;
        }

    }
}


$popular = get_post_meta( $product->id, '_most_popular', true) ? get_post_meta( $product->id, '_most_popular', true) : 0;

$terms = get_the_terms( $product->ID, 'product_cat' );
//print_r($terms);
foreach ($terms as $term) {
    $category_current = $term->name;
    $category_id = $term->term_id;
}

$attachment_ids = $product->get_gallery_attachment_ids();
if ( $attachment_ids ) {
	$image_link = wp_get_attachment_url( $attachment_ids[0] );
	//$img = '<img src="' . $image_link . '">';
	$img = wp_get_attachment_image( $attachment_ids[0], apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ) );
} else {
	$img = apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), get_the_title() ), $product->id );
}
?>



<!-- one product : begin -->
<div class="product-shot-descr">

    <div class="links">
		<a href="#" style="display:none;"></a>
		<a href="#" style="display:none;"></a>
        <a href="<?php the_permalink(); ?>" title=""><?php echo $img;?></a>
    </div>
    <div><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></div>
    <div><?php the_price( $product->id );?></div>

</div>
<!-- one product : end -->

