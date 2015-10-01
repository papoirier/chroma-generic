<?php
/**
 * Order Customer Details
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<header>
	<h4 class="text-center sc"><?php _e( 'Customer Details', 'woocommerce' ); ?></h4>
</header>

<div class="customer_details">
	<?php if ( $order->customer_note ) : ?>
			<h5><?php _e( 'Note', 'woocommerce' ); ?></h5>
			<p><?php echo wptexturize( $order->customer_note ); ?></p>
	<?php endif; ?>

	<?php if ( $order->billing_email ) : ?>
			<h5><?php _e( 'Email', 'woocommerce' ); ?></h5>
			<p><?php echo esc_html( $order->billing_email ); ?></p>
	<?php endif; ?>

	<?php if ( $order->billing_phone ) : ?>
			<h5><?php _e( 'Phone', 'woocommerce' ); ?></h5>
			<p><?php echo esc_html( $order->billing_phone ); ?></p>
	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>

	<div class="addresses">
		<?php endif; ?>
		<header>
			<h5 class=""><?php _e( 'Billing Address', 'woocommerce' ); ?></h5>
		</header>
		<address>
			<?php echo ( $address = $order->get_formatted_billing_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
		</address>

<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>

		<header class="title">
			<h5><?php _e( 'Shipping Address', 'woocommerce' ); ?></h5>
		</header>
		<address>
			<?php echo ( $address = $order->get_formatted_shipping_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
		</address>
	</div><!-- /.addresses -->

<?php endif; ?>
</div>
