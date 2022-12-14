<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Increase loop count
$woocommerce_loop['loop']++;
?>

<?php do_action( 'woocommerce_before_subcategory', $category ); //print_r($category);?>

<?
    $forTork = '/catalog/produkciya-tork/';
?>
<?if($_SERVER['REQUEST_URI'] == $forTork):?>
<li><a href="#" data-filter=".one-product[data-catid='<?php echo $category->term_id; ?>']" data-cid="<?php echo $category->term_id; ?>" data-pid="<?php echo $category->parent; ?>" class="<?php echo $category->slug; ?>" title="<?php echo $category->name; ?>"><?php echo $category->name; ?></a></li>
<?else:?>
<li><a href="#" data-filter=".one-product[data-catid='<?php echo $category->term_id; ?>']" data-cid="<?php echo $category->term_id; ?>" data-pid="<?php echo $category->parent; ?>" class="<?php echo $category->slug; ?>" title="<?php echo $category->name; ?>"><?php echo $category->name; ?> <?php if ( $category->count > 0 ) echo apply_filters( 'woocommerce_subcategory_count_html', ' (' . $category->count . ')', $category );?></a></li>
<?endif;?>



		<?php
			/**
			 * woocommerce_after_subcategory_title hook
			 */
			do_action( 'woocommerce_after_subcategory_title', $category );
		?>


	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>
	


