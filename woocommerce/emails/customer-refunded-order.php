<?php
/**
 * Customer refunded order email
 *
 * @author   WooThemes
 * @package  WooCommerce/Templates/Emails
 * @version  2.4.0
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<p><?php
	if ( $partial_refund ) {
		printf( __( "Hi there. Your order on %s has been partially refunded.", 'woocommerce' ), get_option( 'blogname' ) );
	}
	else {
		printf( __( "Hi there. Your order on %s has been refunded.", 'woocommerce' ), get_option( 'blogname' ) );
	}
?></p>

<?php do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text ); ?>

<h2><?php printf( __( 'Order #%s', 'woocommerce' ), $order->get_order_number() ); ?></h2>

<table class="table">
	<thead>
		<tr>
			<th class="td" scope="col" style="text-align:left;"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th class="td" scope="col" style="text-align:left;"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
			<th class="td" scope="col" style="text-align:left;"><?php _e( 'Price', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php echo $order->email_order_items_table( true, false, true ); ?>
	</tbody>
	<tfoot>
		<?php
			if ( $totals = $order->get_order_item_totals() ) {

				$i = 0;

				if ( $refund && $refund->get_refund_amount() > 0 ) {
					?><tr>
						<th scope="row" colspan="2"><?php _e( 'Amount Refunded', 'woocommerce' ); ?>:</th>
						<td <?php echo $refund->get_formatted_refund_amount(); ?></td>
					</tr><?php
					$i++;
				}

				foreach ( $totals as $total ) {
					$i++;
					?><tr>
						<th scope="row" colspan="2"><?php echo $total['label']; ?></th>
						<td><?php echo $total['value']; ?></td>
					</tr><?php
				}
			}
		?>
	</tfoot>
</table>

<?php do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text ); ?>

<?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text ); ?>

<?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text ); ?>

<?php do_action( 'woocommerce_email_footer' ); ?>
