<?php  
/*
 * Story 	-> 138
 * Works 	-> 147
 * Contact 	-> 277
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
					 * About 		-> 228
					 * The founder 	-> 219, 221
					 *
					 */ ?>
					<?php
					$children = wp_list_pages('title_li=&child_of=228&echo=0');
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
						<li><a href="http://co-so.co" data-toggle="tooltip" title="<?php _e( 'Check out some products made with Chroma felts!', 'chroma' ); ?>"><?php _e( '<span class="sc">CO&amp;SO</span> products', 'chroma' ); ?></a></li>
						<li><a href="http://blog.tangiblemtl.ca" title="Blog" target="_blank"><?php _e( 'Blog', 'chroma' ); ?></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-6">
					<ul>
						<li class="subtitle"><?php _e( 'Connect', 'chroma' ); ?></li>
						<li><a href="<?php echo get_the_permalink('277'); ?>" title="<?php echo get_the_title('277'); ?>"><?php echo get_the_title('277'); ?></li>
						<li><a href="https://www.facebook.com/TangibleStudioInc" title="Facebook" target="_blank">Facebook</a></li>
						<li><a href="https://www.pinterest.com/mariannecm/felt-inspirations/" title="Pinterest" target="_blank">Pinterest</a></li>
						<li><a class="newsletter" href="http://eepurl.com/Ai7bv" target="_blank"><?php _e( 'Newsletter', 'chroma' ); ?></a></li>
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
</body>
</html>