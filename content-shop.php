<?php
/*
 * red:     en -> 125, fr -> 128
 * green:   en -> 126, fr -> 129
 * blue:    en -> 127, fr -> 130
 * 
 *
 *
 */
?>
<div class="container shop-products">

    <!-- FELTS - - - - - - - - - - - - -->
    <div class="row title">
        <div class="col-md-12">
            <h3 class="text-center"><?php _e('The felts','chroma'); ?></h3>
        </div>
    </div>
	<div class="row products">
	    <ul>
    	<?php
        $args_felt = array( 
            'post_type' => 'product', 
            'stock' => 1, 
            'posts_per_page' => -1, 
            'order' => 'asc', 
            'orderby' => 'meta_value', 
            'meta_key' => '_sku', 
            'product_cat' => 'felt, feutre'
            );
        $loop = new WP_Query( $args_felt );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

	        <li class="col-md-4">    
	            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	            	<?php //$url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'full') ); ?>
	            	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID, 'large') ); ?>
	                <?php if (has_post_thumbnail( $loop->post->ID )) { 
	                	echo '<img src="' . $url . '" class="img-circle">';
	                	} //else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
	            </a>
	            <p class="text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
	            <?php //woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
	        </li>

    	<?php endwhile; ?>
    	<?php wp_reset_query(); ?>
        </ul>
    </div>

    <!-- BASKETS - - - - - - - - - - - - -->
    <div class="row title">
        <div class="col-md-12">
            <h3 class="text-center"><?php _e('The baskets','chroma'); ?></h3>
        </div>
    </div>
    <div class="row products">
        <ul>
        <?php
        $args_baskets = array( 
            'post_type' => 'product', 
            'stock' => 1, 
            'posts_per_page' => -1, 
            'order' => 'asc', 
            'orderby' => 'meta_value', 
            'meta_key' => '_sku', 
            'product_cat' => 'baskets, paniers'
            );
        $loop = new WP_Query( $args_baskets );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <li class="col-md-4">    
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID, 'large') ); ?>
                    <?php if (has_post_thumbnail( $loop->post->ID )) { 
                        echo '<img src="' . $url . '" class="img-circle">';
                        } ?>
                </a>
                <p class="text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
    </div>

    <!-- SAMPLE - - - - - - - - - - - - -->
    <div class="row title">
        <div class="col-md-12">
            <h3 class="text-center"><?php _e('The sample','chroma'); ?></h3>
        </div>
    </div>
    <div class="row products">
        <ul>
        <?php
        $args_sample = array( 
            'post_type' => 'product', 
            'stock' => 1, 
            'posts_per_page' => 1, 
            'order' => 'asc', 
            'orderby' => 'meta_value', 
            'meta_key' => '_sku', 
            'product_cat' => 'sample, echantillon'
            );
        $loop = new WP_Query( $args_sample );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

            <li class="col-md-4 col-md-offset-4">    
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID, 'large') ); ?>
                    <?php if (has_post_thumbnail( $loop->post->ID )) { 
                        echo '<img src="' . $url . '" class="img-circle">';
                        } ?>
                </a>
                <p class="text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
            </li>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
    </div>
    

</div>