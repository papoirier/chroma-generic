<?php
/*
 * Template Name: Cart page
 */
get_header();
global $woo_options;
woo_main_before(); 
?>
<?php 
if ( have_posts() ) :
while ( have_posts() ) : the_post();
?>   
    <div class="container generic-page top-pad"> 
        <div class="row">
    		<div class="col-md-8 col-md-offset-2">
    	    	<h4 class="text-center"><?php the_title(); ?></h4>
    		</div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php the_content(); ?>
            </div>
        </div>
    </div><!-- .container.top-pad -->
            
<?php endwhile; ?>
<?php endif; ?>     
<?php 
woo_main_after(); 
get_footer(); 
?>