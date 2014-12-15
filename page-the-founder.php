<?php
/*
 * Template Name: About subpage
 */
?>

<?php 
get_header(); 
global $woo_options;
woo_main_before();
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'about' ); ?>
<?php endwhile; // end of the loop. ?>

<?php 
woo_main_after();
get_footer(); 
?>
