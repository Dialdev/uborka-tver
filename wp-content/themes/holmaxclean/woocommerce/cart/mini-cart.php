<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php do_action( 'woocommerce_before_mini_cart' ); ?>


	<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

		<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				
				$total_price = $total_price + str_replace(' ', '', get_price( $cart_item['product_id'] ) ) * $cart_item['quantity'];
				$total_quantity = $cart_item['quantity'] + $total_quantity;

			}
		?>

	
	<?php else : ?>
	<?php
		$total_price = 0;
		$total_quantity = 0;
	?>
	<?php endif; ?>



<div class="bucket" data-link="<?php echo WC()->cart->get_cart_url(); ?>">
    
    <!-- number -->
    <div><?php echo $total_quantity; ?></div>

    <!-- text -->
    <div>
        <span>В корзине</span>
        <span><?php echo number_format( $total_price, 0, '.', ' '); ?> <span class="ruble">o</span></span>
    </div>

</div>



<?php //echo $items_p;?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
