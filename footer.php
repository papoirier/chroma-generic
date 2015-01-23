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
					<?php // ABOUT // live -> 502 // local -> 228 ?>
					<?php $children = wp_list_pages('title_li=&child_of=502,228&echo=0');
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
						<?php // PRESS // live -> 629 // local -> 297 ?>
						<li><a href="<?php echo get_the_permalink('629'); ?>" title="<?php echo get_the_title('629'); ?>"><?php echo get_the_title('629');?></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-6">
					<ul>
						<li class="subtitle"><?php _e( 'Connect', 'chroma' ); ?></li>
						<?php // CONTACT // live -> 511 // local -> 275 ?>
						<li><a href="<?php echo get_the_permalink('511'); ?>" title="<?php echo get_the_title('511'); ?>"><?php echo get_the_title('511');?></li>
						<li><a href="https://www.facebook.com/TangibleStudioInc" title="Facebook" target="_blank">Facebook</a></li>
						<li><a href="https://www.pinterest.com/mariannecm/felt-inspirations/" title="Pinterest" target="_blank">Pinterest</a></li>
						<?php // NEWSLETTER // live -> 617 // local -> 302 ?>
						<li><a href="<?php echo get_the_permalink('617'); ?>" title="<?php echo get_the_title('617'); ?>"><?php echo get_the_title('617');?></li>
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