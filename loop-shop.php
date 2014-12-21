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
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID, 'large') ); ?>
            <?php if (has_post_thumbnail( $loop->post->ID )) { 
                echo '<img src="' . $url . '" class="img-circle">';
                } //else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
           <h4 class="text-center"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></h4>
        </a>
    </li>
<?php } else { ?>
    <li class="col-md-4">    
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID, 'large') ); ?>
            <?php if (has_post_thumbnail( $loop->post->ID )) { 
                echo '<img src="' . $url . '" class="img-circle">';
                } //else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
           <h4 class="text-center"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></h4>
        </a>
    </li>
<?php } ?>
