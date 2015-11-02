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
</div> <!-- /.col-md-6 -->
</div> <!-- /.row -->
</div> <!-- /.container -->
	<div class="woocommerce-message alert-success text-center"><?php echo wp_kses_post( $message ); ?></div>

<div class="container">
	<div class="row">
    	<div class="col-md-6 col-md-offset-3">

<?php endforeach; ?>
