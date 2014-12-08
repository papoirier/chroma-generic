<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
	get_header();
	global $woo_options;
?>

<?php woo_main_before(); ?>

<?php woocommerce_content(); ?>
    
        
<?php 
woo_main_after(); 
get_sidebar(); 
get_footer(); 
?>