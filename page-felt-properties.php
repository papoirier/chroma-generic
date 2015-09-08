<?php
/*
 * Template Name: Felt properties
 */
?>

<?php 
get_header(); 
global $woo_options;
woo_main_before();
?>
<?php $my_query = new WP_Query( 'page_id=68' ); ?>
<?php if ( $my_query->have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'felt' ); ?>
<?php endwhile; 
wp_reset_postdata(); 
?>

<?php 
woo_main_after();
get_footer(); 
?>
<?php endif;?>