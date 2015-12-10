<?php
/**
 * Template Name: Newsletter page
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
    <div class="container generic-page top-pad"> 
        <div class="row">
    		<div class="col-md-6 col-md-offset-3">
    	    	<h4 class="text-center"><?php the_title(); ?></h4>
    		</div>
        </div>

        <?php
        if (has_post_thumbnail()) {
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true); ?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="portrait">
                        <img src="<?php echo $thumb_url[0]; ?>" class="img-circle center-block">
                    </div>
                </div>
            </div>
       <?php } ?>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php the_content(); ?>
            </div>
        </div>

		<div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php get_template_part('mailchimp.php'); ?>
            </div>
        </div>

    </div><!-- .container.top-pad -->
            
<?php endwhile; ?>
<?php endif; ?>     
<?php 
woo_main_after(); 
get_footer(); 
?>