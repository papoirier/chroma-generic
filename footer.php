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

					<?php $title_about = apply_filters( 'wpml_object_id', 502, 'post' ); ?>
					<ul>
						<li class="subtitle"><?php echo get_the_title( $title_about ); ?></li>
						<?php 
						$children = wp_list_pages("title_li=&child_of=".$title_about."&echo=0");
						if ($children) { echo $children; } 
						?>
					</ul>
					
				</div>
				<div class="col-md-3 col-xs-6">
					<ul>
						<li class="subtitle"><?php _e( 'Discover', 'chroma'); ?></li>
						<li><a href="http://tangiblemtl.ca" title="Tangible Studio" target="_blank">Tangible Studio</a></li>
						<li><a href="http://co-so.co" title="CO&amp;SO" target="_blank"><?php _e( '<span class="sc">CO&amp;SO</span> products', 'chroma' ); ?></a></li>
						<?php // PRESS // live -> 629 // local -> 297 ?>
						<?php $title_press = apply_filters( 'wpml_object_id', 629, 'post' ); ?>
						<li><a href="<?php echo get_the_permalink($title_press); ?>" title="<?php echo get_the_title($title_press); ?>"><?php echo get_the_title($title_press);?></li>
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
						<?php $title_newsletter = apply_filters( 'wpml_object_id', 617, 'post' ); ?>
						<li><a href="<?php echo get_the_permalink($title_newsletter); ?>" title="<?php echo get_the_title($title_newsletter); ?>"><?php echo get_the_title($title_newsletter);?></a></li>
					</ul>
				</div>
			</div>
			
			<?php // CREDITS // 645, 652 ?>
			<div class="row copyright">
		    	<div class="col-md-12">
		    		<?php $title_credits = apply_filters( 'wpml_object_id', 645, 'post' ); ?>
		    		<p class="text-center small">&copy; <?php echo date("Y"); ?>, Tangible Studio, Inc. &bull; <a href="<?php echo get_the_permalink($title_credits); ?>" title="<?php echo get_the_title($title_credits); ?>"><?php echo get_the_title($title_credits);?></a> &bull; <a href="mailto:&#105;&#110;&#102;&#111;&#064;&#099;&#104;&#114;&#114;&#114;&#111;&#109;&#097;&#046;&#099;&#097;">&#105;&#110;&#102;&#111;&#064;&#099;&#104;&#114;&#114;&#114;&#111;&#109;&#097;&#046;&#099;&#097;</a></p>
		        </div>
		    </div>
			
		</div> <!-- .container  -->
	</footer>
	<?php wp_footer(); ?>
	<?php include_once('analytics-tracking.php') ?>
</body>
</html>