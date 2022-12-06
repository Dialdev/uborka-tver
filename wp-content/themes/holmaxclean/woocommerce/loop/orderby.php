<?php
/**
 * Show options for ordering
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
		<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
		<?php endforeach; ?>
	</select>
	<?php
		// Keep query string vars intact
		foreach ( $_GET as $key => $val ) {
			if ( 'orderby' === $key || 'submit' === $key ) {
				continue;
			}
			if ( is_array( $val ) ) {
				foreach( $val as $innerVal ) {
					echo '<input type="hidden" name="' . esc_attr( $key ) . '[]" value="' . esc_attr( $innerVal ) . '" />';
				}
			} else {
				echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
			}
		}
	?>
</form>

          <!-- sorting : begin -->
            <div class="sorting clearfix">
                
                <!-- select -->
                <div class="select">
                    <span>Сортировать по</span>
                    <a href="#" title="">Цене</a>
                    <a href="#" title="">Чему-нибудь</a>
                    <a href="#" title="">Году</a>
                    <a href="#" title="">Популярности</a>
                </div>

                <!-- variant -->
                <div class="variant clearfix">
                    <span>Вид</span>
                    <a href="#" title="" class="active"></a>
                    <a href="#" title=""></a>
                </div>

            </div>
            <!-- sorting : end -->