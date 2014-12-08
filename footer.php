<?php  
/*
 * Story -> 138
 * Works -> 147
 */ 
?>

<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php wp_list_pages('include=138,147&title_li=') ?>
				</div>
				<div class="col-md-3">
					<ul>
						<li class="subtitle"><?php _e( 'Links', 'woocommerce'); ?></li>
						<li><a href="http://co-so.co" data-toggle="tooltip" title="<?php _e( 'Check out some products made with Chroma felts!', 'woocommerce' ); ?>">CO&amp;SO</a></li>
						<li><a href="https://www.facebook.com/TangibleStudioInc" title="Facebook" target="_blank">Facebook</a></li>
						<li><a href="http://blog.tangiblemtl.ca" title="Blog" target="_blank"><?php _e( 'Blog', 'woocommerce' ); ?></a></li>
						<li><a class="newsletter" href="http://eepurl.com/Ai7bv" target="_blank"><?php _e( 'Newsletter', 'woocommerce' ); ?></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li class="subtitle"><?php _e( 'Contact', 'woocommerce'); ?></li>
						<li><a href="mailto:&#105;&#110;&#102;&#111;&#064;&#099;&#104;&#114;&#114;&#114;&#111;&#109;&#097;&#046;&#099;&#097;">&#105;&#110;&#102;&#111;&#064;&#099;&#104;&#114;&#114;&#114;&#111;&#109;&#097;&#046;&#099;&#097;</a></li>
						<li>&copy; <?php echo date("Y"); ?>, <span class="sc">Chroma</span> <?php _e( 'felts', 'woocommerce' ); ?></li>
						<li><a href="#top"><?php _e( 'Back to top', 'woocommerce'); ?></a></li>
					</ul>
				</div>
			</div>
		</div> <!-- .container  -->
	</footer>
	<?php wp_footer(); ?>
</body>
</html>