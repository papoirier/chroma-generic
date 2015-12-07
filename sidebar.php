<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<?php if (!is_front_page()) { ?>
				<a href="<?php echo get_home_url(); ?>" class="navbar-brand sc"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-inline.svg" title="logo" alt="CHROMA"></a>
			<?php } ?>
		</div>

		<ul class="nav navbar-right menu-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/<?php if (WC()->cart->cart_contents_count > 0) { echo "btn-profile-cart.svg"; } else { echo "btn-profile.svg"; }?>" title="profile"></a>
				<ul class="dropdown-menu">
					<?php $items = apply_filters( "wp_nav_menu_{$menu->slug}_items", $items, $args ); ?>
					<?php if ( is_user_logged_in() ) { ?>
				 	<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','chroma'); ?>"><?php _e('My Account','chroma'); ?></a></li>
				 	<li><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Cart','chroma'); ?>"><?php echo _e( 'Cart ','chroma') ; echo sprintf (_n( '(%d)', '(%d)', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></a></li>
				 	<?php
					printf(
						__( '<li><a href="%2$s">Sign out</a></li>', 'woocommerce' ) . ' ',
						$current_user->display_name,
						wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
						); ?>
					 <?php } else { ?>
					 	<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login','chroma'); ?>"><?php _e('Login','chroma'); ?></a></li>
					 <?php } ?>
				</ul>
			</li>
			<li><?php custom_language_selector();?></li>
		</ul>
	</div><!-- /.container-fluid -->
</nav>