<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 *
 * --- MOD ---
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<div class="container top-pad"> 
    <div class="row">
		<div class="col-md-6 col-md-offset-3">
	    	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h4 class="text-center"><?php woocommerce_page_title(); ?></h4>
			<?php endif; ?>
		</div>
    </div>
</div>

		<?php $my_query = new WP_Query( 'page_id=9' );?>
	<?php if ( $my_query->have_posts() ) : ?>
		<div>
		    <?php
		    while ($my_query->have_posts()) : $my_query->the_post();
		        require(locate_template('content-shop.php'));
		    endwhile;
		    wp_reset_postdata(); 
		    ?>
		</div>
	<?php endif;?>

</div> <!-- /.container -->

<?php get_footer(); ?>
