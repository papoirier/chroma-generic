<?php
/**
 * Template Name: Cart page
 */
?>

<?php
get_header();
global $woo_options;
woo_main_before(); 
?>

<?php 
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?> 
       
            <div class="container top-pad"> 
				
                <div class="row">
    				<div class="col-md-12">
    			    	<h2><?php the_title(); ?></h2>
    				</div>
                </div>
				
                
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?php edit_post_link( __( 'Edit page', 'woothemes' ), '<h5 class="btn btn-default btn-edit-page">', '</h5>' ); ?>
                    </div>
                </div>
            
            </div><!-- .container.top-pad -->
            
        <?php endwhile; ?>
        <?php endif; ?>  
        
<?php 
woo_main_after(); 
get_footer(); 
?>