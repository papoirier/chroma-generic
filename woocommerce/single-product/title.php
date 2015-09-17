<?php
/**
 * Single Product title
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 1.6.4
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<h4 itemprop="name" class="product_title entry-title text-center"><?php the_title(); ?></h4>
