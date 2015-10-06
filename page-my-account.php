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
        <?php if (has_post_thumbnail()) { ?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="portrait">
                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
                        $url = $thumb[0];
                         //$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'medium') ); ?>
                        <img src="<?php echo $url; ?>" class="img-circle center-block">
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