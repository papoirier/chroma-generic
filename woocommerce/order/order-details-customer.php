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
		</div> <!-- /.woocommerce -->
	</div> <!-- /.col-md-6 -->
</div> <!-- /.row -->

<div class="customer_details">
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<header>
				<h4 class="text-center sc"><?php _e( 'Customer Details', 'woocommerce' ); ?></h4>
			</header>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3 details">		
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
		</div>
	</div>

<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>

	<div class="row addresses">
		<div class="col-md-3 col-md-offset-3 billing">			
			<header>
				<h5 class=""><?php _e( 'Billing Address', 'woocommerce' ); ?></h5>
			</header>
			<address>
				<?php echo ( $address = $order->get_formatted_billing_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
			</address>
		</div>
	<?php endif; ?>

	<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() ) : ?>
		<div class="col-md-3 shipping">
			<header class="title">
				<h5><?php _e( 'Shipping Address', 'woocommerce' ); ?></h5>
			</header>
			<address>
				<?php echo ( $address = $order->get_formatted_shipping_address() ) ? $address : __( 'N/A', 'woocommerce' ); ?>
			</address>
		</div>
	</div><!-- /.row.addresses -->

<?php endif; ?>
</div><!-- /.customer_details -->

