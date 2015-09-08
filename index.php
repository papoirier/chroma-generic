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

<!-- WELCOME - - - - - - - - - - - - - - - - - -  - -->
<section id="welcome" class="full">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-fr.png ?>" title="chroma logo" alt="logo">
			</div>
		</div>
	</div>
</section> <!-- #welcome -->

<!-- THE FELT - - - - - - - - - - - - - - - - - - - -->
<section id="felt" class="">
	<?php woo_main_before(); ?>
	<?php woo_loop_before(); ?>
    	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', 'team-member' );
			?>

		<?php endwhile; ?>
		<?php woo_loop_after(); ?>
		<?php woo_main_after(); ?>

</section> <!-- #felt -->

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
</section> <!-- #shop -->

<!-- PRODUCTS - - - - - - - - - - - - - - - - - - - -->
<section id="products" class="">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
		    	<h2>Example products</h2>
		    </div>
		</div>

		<div class="row">
			<div class="col-md-4">
		    	<h5>Space divider</h5>
		    </div>
		    <div class="col-md-4">
		    	<h5>Wall covering</h5>
		    </div>
		    <div class="col-md-4">
		    	<h5>Basket</h5>
		    </div>
		</div>

	</div>
</section> <!-- #products -->
		
<?php get_footer(); ?>