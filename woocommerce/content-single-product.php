<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="container generic-page">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<?php
				/**
				 * woocommerce_before_single_product hook
				 *
				 * @hooked wc_print_notices - 10
				 */
				 do_action( 'woocommerce_before_single_product' );

				 if ( post_password_required() ) {
				 	echo get_the_password_form();
				 	return;
				 }
			?>

			<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php
					/**
					 * woocommerce_before_single_product_summary hook
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );
				?>

				<div class="summary entry-summary">

					<div class="title">
						<h4 class="text-center"><?php the_title(); ?></h4>
					</div>
					<div class="description-felt">
						<?php
						global $post;
						$terms = wp_get_post_terms( $post->ID, 'product_cat' );
						foreach ( $terms as $term ) $categories[] = $term->slug;
						if ( (in_array('feutre', $categories)) || (in_array('felt', $categories)) ) { ?>
							<p><?php echo _e('The color', 'chroma') . _e('&nbsp;<span class="lc">') . the_title() . _e('</span>&nbsp;') . _e('is obtained by thoroughly sorting garments and without adding any dye. It is sold at a standard width of 6 feet', 'chroma'); ?> (183&nbsp;cm).</p>
						<?php } else { ?>
							<?php the_content(); ?>
						<?php } ?>	
						<p><?php echo _e('The felt is 100% recycled and is comprised of 80% post-consumption fibers and 20% regenerated polyester. It is proudly and entirely made in Québec.', 'chroma'); ?></p>
					</div>

					<?php
						/**
						 * woocommerce_single_product_summary hook
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 */
						remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
						do_action( 'woocommerce_single_product_summary' );
					?>

				</div><!-- .summary -->

				<meta itemprop="url" content="<?php the_permalink(); ?>" />

			</div><!-- #product -->

			<?php do_action( 'woocommerce_after_single_product' ); ?>
		</div> <!-- /.col-md-12 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->
