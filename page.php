<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Page Template
 *
 * This template is the default page template. It is used to display content when someone is viewing a
 * singular view of a page ('page' post_type) unless another page template overrules this one.
 * @link http://codex.wordpress.org/Pages
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
?>

<?php 
    woo_main_before(); 
    if ( have_posts() ) { $count = 0;
    while ( have_posts() ) { the_post(); $count++;
?> 
       
        <article <?php post_class(); ?>>
            <div class="container top-pad"> 
				<div class="row">
    				<header class="col-md-12">
    			    	<h2><?php the_title(); ?></h2>
    				</header>
                </div>
				
                <section class="content">
                	<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) ); ?>
                </section> <!-- .row.content -->
                <div class="row">
				    <?php edit_post_link( __( 'Edit page', 'woothemes' ), '<span class="small">', '</span>' ); ?>
                </div>
            </div><!-- .container.top-pad -->
        </article><!-- .post -->
            
            <?php
            	// Determine whether or not to display comments here, based on "Theme Options".
            	if ( isset( $woo_options['woo_comments'] ) && in_array( $woo_options['woo_comments'], array( 'page', 'both' ) ) ) {
            		comments_template();
            	}

				} // End WHILE Loop
			} else {
		?>
			<article <?php post_class(); ?>>
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-12">
            	           <p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
                        </div>
                    </div>
                </div>
            </article><!-- /.post -->
        <?php } // End IF Statement ?>  
        
<?php 
woo_main_after(); 
get_sidebar(); 
get_footer(); 
?>