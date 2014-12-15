<?php
/**
 * red:     en -> 125, fr -> 128
 * green:   en -> 126, fr -> 129
 * blue:    en -> 127, fr -> 130
 * large:   en -> 151, fr -> 154
 * medium:  en -> 161, fr -> 169
 * small:   en -> 162, fr -> 170
 * sample:  en -> 155, fr -> 158
 */
?>
<div class="container shop-products">

    <!-- FELTS - - - - - - - - - - - - -->
    <div class="row title">
        <div class="col-md-12">
            <h3 class="text-center skew skew-right"><?php _e('The felts','chroma'); ?></h3>
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
	        <?php include('loop-shop.php'); ?>
    	<?php endwhile; ?>
    	<?php wp_reset_query(); ?>
        </ul>
    </div>

    <!-- BASKETS - - - - - - - - - - - - -->
    <div class="row title">
        <div class="col-md-12">
            <h3 class="text-center skew skew-left"><?php _e('The baskets','chroma'); ?></h3>
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
            <?php include('loop-shop.php'); ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
    </div>

    <!-- SAMPLE - - - - - - - - - - - - -->
    <div class="row title">
        <div class="col-md-12">
            <h3 class="text-center skew skew-right"><?php _e('The sample','chroma'); ?></h3>
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
            <?php include('loop-shop.php'); ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
    </div>
    

</div>