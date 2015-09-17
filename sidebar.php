<div class="navbar-collapse collapse">
    <div class="row">
    	<div class="col-md-12">
			<ul class="nav nav-justified">
				<li><a href="<?php echo get_home_url(); ?>"><span class="sc">Chroma</span></a></li>
				<li class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php _e( 'Profile', 'chroma'); ?> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php 
						// local
						// compte => 12 / account 7
						// panier 679 / cart 768
					 	$args = array('include' => '12,7,679,768');
						$pages = get_pages($args); 
						foreach ( $pages as $page ) {
							$option = '<li><a href="' . get_page_link( $page->ID ) . '">';
							$option .= $page->post_title;
							$option .= '</a></li>';
							echo $option;
						}
						?>
					</ul>
				</li>
				<li>
				
						<?php custom_language_selector();?>
						<?php //do_action('icl_language_selector'); ?>
				</li>
				
			</ul>
		</div>
	</div>
</div>
