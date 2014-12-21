<?php
/*
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );
 */?>


<?php 
/*
<div class="product_meta">
do_action( 'woocommerce_product_meta_start' ); 
echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Collection', 'Collections', $cat_count, 'woocommerce' ) . ' ', '</span>' ); 
echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'woocommerce' ) . ' ', '.</span>' ); 
do_action( 'woocommerce_product_meta_end' ); ?>
</div>
*/ ?>

