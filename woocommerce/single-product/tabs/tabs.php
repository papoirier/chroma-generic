<?php
/**
 * Single Product tabs
 */

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="description">
		<?php foreach ( $tabs as $key => $tab ) : ?>

			<div class="row">
		    	<div class="col-md-6 col-md-offset-3">
		        
					<!-- div class="panel entry-content" id="tab-<?php echo $key ?>" -->
					<div class="" id="tab-<?php echo $key ?>">
						<?php call_user_func( $tab['callback'], $key, $tab ) ?>
					</div>
				</div>
			</div>

		<?php endforeach; ?>
	</div>

	<div class="no-price">
		<div class="row">
		    <div class="col-md-6 col-md-offset-3 bg-warning">
				<p><?php _e( 'Our shop is *almost* ready. If you would like to know when it will be up, receive additional information or order our products the old school way, do drop us a line at <a href="mailto:&#105;&#110;&#102;&#111;&#064;&#099;&#104;&#114;&#114;&#114;&#111;&#109;&#097;&#046;&#099;&#097;">&#105;&#110;&#102;&#111;&#064;&#099;&#104;&#114;&#114;&#114;&#111;&#109;&#097;&#046;&#099;&#097;</a>. And thanks for your patience!', 'chroma' ); ?></p>
			</div>
		</div>
	</div>

<?php endif; ?>