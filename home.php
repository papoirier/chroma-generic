<?php
	get_header();
	global $woo_options;
?> 

<?php
/**
 * Intro 	en ->  61, fr -> 530
 * The felt en ->  68, fr -> 541
 * Shop 	en -> 426, fr -> 527
 */
?>   

<!-- INTRO - - - - - - - - - - - - - - -  -->
<section id="intro" class="full">
    <?php // INTRO // live -> 530 // local -> 61 ?>
    <?php $my_query = new WP_Query( 'page_id=530' ); ?>
   	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 intro-brand">
				<div class="intro-logo">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'full') ); ?>
					<img src="<?php echo $url; ?>" class="logo">
					<div class="wiggle"></div>
				</div>
				<div class="intro-mobile-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/mobile-felt.png" class="img-responsive">
				</div>
			    <div class="intro-text">
			    	<h4><?php the_content(); ?></h4>
			    	<!-- p class="made-in-qc"><?php //echo get_the_excerpt(); ?></p -->
			    </div>
		    </div>
		</div>
	</div>
	<?php endwhile; ?>
</section> <!-- /#intro -->

<!-- THE FELT - - - - - - - - - - - - - - -  -->
<section id="the-felt" class="full">
<?php // FELT // live -> 541 // local -> 68 ?>
<?php $my_query = new WP_Query( 'page_id=541' ); ?>
<?php if ( $my_query->have_posts() ) : ?>
	<div>
	    <?php
	    while ($my_query->have_posts()) : $my_query->the_post();
	        require(locate_template('content-felt.php'));
	    endwhile;
	    wp_reset_postdata(); 
	    ?>
	</div>
<?php endif;?>
</section> <!-- /#felt -->

<!-- SHOP - - - - - - - - - - - - - - - - - - - -->
<section id="shop" class="">
	<?php // SHOP // live -> 678 // local -> 4 ?>
	<?php $my_query = new WP_Query( 'page_id=678' );?>
	<?php if ( $my_query->have_posts() ) : ?>
		<div>
		    <?php
		    while ($my_query->have_posts()) : $my_query->the_post();
		        require(locate_template('content-shop.php'));
		    endwhile;
		    wp_reset_postdata(); 
		    ?>
		</div>
	<?php endif;?>
</section> <!-- /#shop -->
		
<?php get_footer(); ?>