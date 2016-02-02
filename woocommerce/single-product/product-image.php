<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

?>
<div class="images">
	<?php //if (get_post_meta($post->ID, "product-image", true)) { ?>
    	<!-- img src="<?php //echo get_post_meta($post->ID, "product-image", true); ?>" title="product image" -->
    <?php //} ?>
	<?php
		if ( has_post_thumbnail() ) {
        	the_post_thumbnail( 'medium' );
		} else {
			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );
		}
	?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div>
