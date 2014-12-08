<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
	get_header();
	global $woo_options;
?>    

<!-- INTRO - - - - - - - - - - - - - - -  -->
<section id="intro" class="">

    <?php $my_query = new WP_Query( 'page_id=120' ); ?>
   	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<div class="container">
		<div class="row customer">
			<div class="col-md-6 main-description">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); _e( '/img/logo-en.png', 'woocommerce'); ?>">
				</div>
				<div>
				    <h2><?php the_title(); ?></h2>
			    </div>
			    <div class="description-text">
			    	<h4><?php the_content(); ?></h4>
			    </div>

		        
		    </div>
		</div>
	</div>

	<?php endwhile; ?>
</section> <!-- /#intro -->

<!-- THE FELT - - - - - - - - - - - - - - -  -->
<section id="felt" class="">

    <?php $my_query = new WP_Query( 'page_id=98' ); ?>
   	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

	<div class="container">
		<div class="row customer">
			<div class="col-md-12 main-description">
				<div>
					<?php the_post_thumbnail(); ?>
				</div>
				<div>

				    <h2><?php the_title(); ?></h2>
			    </div>
			    <div class="description-text">
			    	<h4><?php// the_excerpt(10); ?></h4>
			    </div>

		        <?php the_content(); ?>
		    </div>
		</div>
	</div>

	<?php endwhile; ?>
</section> <!-- /#felt -->

<!-- SHOP - - - - - - - - - - - - - - - - - - - -->
<section id="shop" class="">
	<div class="container">
		
		<div class="row">
		    <h2>Shop</h2>
		</div>

		<div class="row">
		    <ul>
		        <?php
		            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
		            $loop = new WP_Query( $args );
		            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <li class="col-md-6">    
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
                            <h3><?php the_title(); ?></h3>
                        	   <span class="price"><?php echo $product->get_price_html(); ?></span>
                        </a>
                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </li>

		        <?php endwhile; ?>
		        <?php wp_reset_query(); ?>

		        <?php
			        $count++;
			        if ( $count%2 == 0) {
			            echo "</ul></div><div class=\"row\"><ul>";
			        }
			    ?>
	</div>
</section> <!-- /#shop -->

<!-- PROPERTIES - - - - - - - - - - - - - - -  -->
<section id="properties" class="">

	<div class="container">
		<div class="row">

			<!-- STRUCTURAL - - - - - - - - - - - - - - -  -->
    		<?php $my_query = new WP_Query( 'page_id=124' ); ?>
   			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	
			<div class="col-md-4 structural">
				<div>
					<?php the_post_thumbnail(); ?>
				</div>
				<div>
				    <h4><?php the_title(); ?></h4>
			    </div>

		        <?php the_content(); ?>
		    </div> <!-- /.structural -->
		    <?php endwhile; ?>

		    <!-- SUPPLE - - - - - - - - - - - - - - -  -->
    		<?php $my_query = new WP_Query( 'page_id=126' ); ?>
   			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	
			<div class="col-md-4 structural">
				<div>
					<?php the_post_thumbnail(); ?>
				</div>
				<div>
				    <h4><?php the_title(); ?></h4>
			    </div>

		        <?php the_content(); ?>
		    </div> <!-- /.supple -->
		    <?php endwhile; ?>

		    <!-- SOFT - - - - - - - - - - - - - - -  -->
    		<?php $my_query = new WP_Query( 'page_id=134' ); ?>
   			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	
			<div class="col-md-4 structural">
				<div>
					<?php the_post_thumbnail(); ?>
				</div>
				<div>
				    <h4><?php the_title(); ?></h4>
			    </div>

		        <?php the_content(); ?>
		    </div> <!-- /.soft -->
		    <?php endwhile; ?>

		</div>
	</div>

	
</section> <!-- /#felt -->

		
<?php get_footer(); ?>