<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
		<footer id="footer" class="container">
			<p>footer</p>
		</footer><!-- /#footer  -->
	
	</div><!-- / footer-wrap -->

</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php //woo_foot(); ?>
</body>
</html>