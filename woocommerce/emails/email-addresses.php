<?php
/**
 * Email Addresses
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.4.0
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

			<h5><?php _e( 'Billing address', 'woocommerce' ); ?></h5>
			<p><?php echo $order->get_formatted_billing_address(); ?></p>

		<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && ( $shipping = $order->get_formatted_shipping_address() ) ) : ?>
			<h5><?php _e( 'Shipping address', 'woocommerce' ); ?></h5>
			<p><?php echo $shipping; ?></p>
		<?php endif; ?>
