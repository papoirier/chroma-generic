<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="<?php echo get_home_url(); ?>" class="navbar-brand sc">Chroma</a>
		</div>

		<ul class="nav navbar-right menu-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/btn-profile.svg" title="profile"></a>
				<ul class="dropdown-menu">
					<?php $items = apply_filters( "wp_nav_menu_{$menu->slug}_items", $items, $args ); ?>
					<?php if ( is_user_logged_in() ) { ?>
				 	<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','chroma'); ?>"><?php _e('My Account','chroma'); ?></a></li>
				 	<?php
					printf(
						__( '<li><a href="%2$s">Sign out</a></li>', 'woocommerce' ) . ' ',
						$current_user->display_name,
						wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
						); ?>
					 <?php } 
					 else { ?>
					 	<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','chroma'); ?>"><?php _e('Login / Register','chroma'); ?></a></li>
					 <?php } ?>
				</ul>
			</li>
			<li><?php custom_language_selector();?></li>
		</ul>
	</div><!-- /.container-fluid -->
	
</nav>



