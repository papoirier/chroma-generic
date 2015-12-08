<?php
/**
 * Show messages
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

if ( ! $messages ){
	return;
}

?>

<?php foreach ( $messages as $message ) : ?>

<?php if (is_product()) { ?>
			</div> <!-- /.col-md-6 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
	<div class="woocommerce-message alert-success text-center"><?php echo wp_kses_post( $message ); ?></div>
	<div class="container">
		<div class="row">
	    	<div class="col-md-6 col-md-offset-3">
<?php } else { ?>
				</div> <!-- /.woocommerce -->
			</div> <!-- /.col-md-8 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
	<div class="woocommerce-message alert-success text-center"><?php echo wp_kses_post( $message ); ?></div>
	<div class="container generic-page">
		<div class="row">
	    	<div class="col-md-8 col-md-offset-2">
<?php } ?>


<?php endforeach; ?>

