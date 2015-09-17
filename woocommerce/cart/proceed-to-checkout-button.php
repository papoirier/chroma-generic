<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo '<a href="' . esc_url( WC()->cart->get_checkout_url() ) . '" class="checkout-button btn btn-default btn-lg">' . __( 'Proceed to Checkout', 'woocommerce' ) . '</a>';
