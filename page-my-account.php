<?php
/*
 * Template Name: My Account Page
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
    <?php // FAQ // 518, 439 // CREDITS // 645, 652 ?>
    <div class="container my-account-page top-pad"> 
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
    </div><!-- .container.top-pad -->
            
<?php endwhile; ?>
<?php endif; ?>     
<?php 
woo_main_after(); 
get_footer(); 
?>