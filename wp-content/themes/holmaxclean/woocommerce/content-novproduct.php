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
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

global $product, $woocommerce_loop, $product_cat;


//print_r($product_cat);
//echo $product->id;
// Store loop count we're currently on
if (empty($woocommerce_loop['loop']))
    $woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if (empty($woocommerce_loop['columns']))
    $woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 4);

// Ensure visibility
if (!$product || !$product->is_visible())
    return;

// Increase loop count
$woocommerce_loop['loop'] ++;

// Extra post classes
$classes = array();
if (0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'])
    $classes[] = 'first';
if (0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'])
    $classes[] = 'last';

$classes[] = 'one-product clearfix';


// add tag slugs
$data_tags = array();
$tags = get_the_terms($product->id, 'product_tag');
if (!empty($tags)) {
    foreach ($tags as $key => $value) {
        //print_r($value);
        if (strpos($value->slug, 'brand-') !== false) {
            $brand_tags = $value->name;
        }
    }
}

/* $attribute = $product->get_attributes();

  print_r( $attribute );

  $out = get_the_terms( $product->id, $attribute['pa_pr_feed']['name'] );

  print_r( $out ); */

//print_r( $product );

$popular = get_post_meta($product->id, '_most_popular', true) ? get_post_meta($product->id, '_most_popular', true) : 0;

$terms = get_the_terms($product->ID, 'product_cat');
//print_r($terms);
if ($terms) {
    foreach ($terms as $term) {
        $category_current = $term->name;
        $category_id = $term->term_id;
    }
}

$attachment_ids = $product->get_gallery_attachment_ids();
if ($attachment_ids) {
    $image_link = wp_get_attachment_url($attachment_ids[0]);
    //$img = '<img src="' . $image_link . '">';
    $img = wp_get_attachment_image($attachment_ids[0], apply_filters('single_product_small_thumbnail_size', 'shop_thumbnail'));
} else {
    $img = apply_filters('woocommerce_single_product_image_html', sprintf('<img src="%s" alt="%s" />', wc_placeholder_img_src(), get_the_title()), $product->id);
}
?>

<div>
    <!-- one product : begin -->
    <div <?php post_class($classes); ?> data-catid="<?php echo $category_id; ?>" <?php echo $brand_tags ? 'data-brand="' . $brand_tags . '"' : '' ?> data-stamp="<?php echo strtotime($product->post->post_date); ?>" data-price="<?php echo get_price($product->id); ?>" data-popular="<?php echo $popular; ?>">

        <!-- image -->
        <a href="<?php the_permalink(); ?>" title=""><span> <?php echo $img; ?></span> </a>

        <div class="descr">
            <!-- title -->
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php echo str_replace('—', '-', get_the_title()); ?> </a>

            <!-- descrption -->
            <div><?php echo $category_current; ?></div>
        </div>

        <!-- price -->
        <div class="clearfix price">
            <div><?php the_price($product->id); ?></div>
            <div></div>
        </div>
        <div class="customprice"><?php
$custprice = get_field('custprice');
$custpricetitle = get_field('custpricetitle');

if (!empty($custprice)) {
    echo $custprice . '<span class="ruble">o</span>';

    if (!empty($custpricetitle)) {
        echo " (" . $custpricetitle . ")";
    }
}
?>
        </div>

        <!-- form : begin -->
        <form action="">
            <div class="number clearfix">
                <div class="input-wrapper">
                    <input type="text" value="1">
                    <div class="controls">
                        <span class="plus"></span>
                        <span class="minus"></span>
                    </div>
                    <?
                    echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="sub-cart %s button added product_type_%s">В корзину</a>',
                    esc_url( $product->add_to_cart_url() ),
                    esc_attr( $product->id ),
                    esc_attr( $product->get_sku() ),
                    $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                    esc_attr( $product->product_type )
                    ),
                    $product );
                    ?>
                </div>
            </div>
        </form>
        <!-- form : end -->

    </div>
    <!-- one product : end -->
</div>