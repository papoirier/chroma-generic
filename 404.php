<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php get_header(); ?>
<?php woo_main_before(); ?>
<div class="container generic-page top-pad four-o-four-page">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h4 class="text-center"><?php _e( 'Error 404 - Page not found!', 'chroma' ); ?></h4>
            </header>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p><?php _e( 'Clearly, the page you trying to reach does not exist nor ever has.', 'chroma');?></p>
            <p class="sc"><a href="<?php echo icl_get_home_url(); ?>"><?php _e('Go home!', 'chroma');?></a></p>
        </div>
    </div>
</div>
<?php woo_main_after(); ?>		
<?php get_footer(); ?>