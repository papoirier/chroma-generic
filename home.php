<?php
	get_header();
	global $woo_options;
?> 

<?php
/**
 * Intro 	-> 61
 * The felt -> 68
 */
?>   

<!-- INTRO - - - - - - - - - - - - - - -  -->
<section id="intro" class="full">

    <?php $my_query = new WP_Query( 'page_id=61' ); ?>
   	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row customer">
			<div class="col-md-4 main-description">
				<div class="intro-brand">
					<?php //echo get_stylesheet_directory_uri(); _e( '/img/logo-en.png', 'chroma'); ?>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'full') ); ?>
					<img src="<?php echo $url; ?>" class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wiggle-separator.png" class="wiggle">
				</div>
			    <div class="description-text">
			    	<h4><?php the_content(); ?></h4>
			    	<p class="made-in-qc sc"><?php echo get_the_excerpt(); ?></p>
			    </div>

		        
		    </div>
		</div>
	</div>

	<?php endwhile; ?>
</section> <!-- /#intro -->

<!-- THE FELT - - - - - - - - - - - - - - -  -->
<section id="the-felt" class="full">
<?php $my_query = new WP_Query( 'page_id=68' ); ?>
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

	<?php //echo spit_the_cat('felt'); ?>

		<?php $my_query = new WP_Query( 'page_id=4' ); ?>
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