<?php 
/**
 * Sample
 * en -> 556
 * fr -> 555
 */
?>
<?php if ($post->ID == 555 || $post->ID == 556) { ?>
    <li class="col-md-4 col-md-offset-4">    
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
            <?php if (has_post_thumbnail( $loop->post->ID )) {
                the_post_thumbnail( 'medium' );
            } ?>
           <h4 class="text-center"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></h4>
        </a>
    </li>
<?php } else { ?>
    <li class="col-md-4">    
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
            <?php if (has_post_thumbnail( $loop->post->ID )) {
                the_post_thumbnail( 'medium' );
            } ?>
           <h4 class="text-center"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></h4>
        </a>
    </li>
<?php } ?>
