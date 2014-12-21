<?php  
/*
 * Story 	en -> 138, fr -> 
 * Works 	en -> 147, fr -> 
 * Contact 	en -> 277, fr -> 
 */ 
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<ul>
						<li class="subtitle"><?php _e( 'Language', 'chroma'); ?></li>
						<li><?php icl_post_languages();?></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-xs-6">
					<?php 
					/*
					 * About 		-> 228, 502
					 * The founder 	-> 219, 221
					 *
					 */ ?>
					<?php
					$children = wp_list_pages('title_li=&child_of=502&echo=0');
					if ($children) { ?>
						<ul>
							<li class="subtitle"><?php _e( 'About', 'chroma'); ?></li>
							<?php echo $children; ?>
						</ul>
					<?php } ?>
				</div>
				<div class="col-md-3 col-xs-6">
					<ul>
						<li class="subtitle"><?php _e( 'Discover', 'chroma'); ?></li>
						<li><a href="http://tangiblemtl.ca" title="Tangible Studio" target="_blank">Tangible Studio</a></li>
						<li><a href="http://co-so.co" title="CO&amp;SO" target="_blank"><?php _e( '<span class="sc">CO&amp;SO</span> products', 'chroma' ); ?></a></li>
						<li><a class="newsletter" href="http://eepurl.com/Ai7bv" target="_blank"><?php _e( 'Newsletter', 'chroma' ); ?></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-6">
					<ul>
						<li class="subtitle"><?php _e( 'Connect', 'chroma' ); ?></li>
						<li><a href="<?php echo get_the_permalink('511'); ?>" title="<?php echo get_the_title('511'); ?>"><?php echo get_the_title('511'); ?></li>
						<li><a href="https://www.facebook.com/TangibleStudioInc" title="Facebook" target="_blank">Facebook</a></li>
						<li><a href="https://www.pinterest.com/mariannecm/felt-inspirations/" title="Pinterest" target="_blank">Pinterest</a></li>
					</ul>
				</div>
			</div>
			
			<div class="row copyright">
		    	<div class="col-md-12">
		    		<p class="text-center small">&copy; <?php echo date("Y"); ?>, Tangible Studio, Inc.</p>
		        </div>
		    </div>
			
		</div> <!-- .container  -->
	</footer>
	<?php wp_footer(); ?>
	<?php include_once('analytics-tracking.php') ?>
</body>
</html>