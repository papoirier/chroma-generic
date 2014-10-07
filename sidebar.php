<ul class="nav nav-justified">
	<li><?php icl_post_languages();?></li>
	<li><a href="<?php echo get_home_url(); ?>"><?php _e('Home','chroma'); ?></a></li>
 <?php 
  $pages = get_pages(); 
  foreach ( $pages as $page ) {
  	$option = '<li><a href="' . get_page_link( $page->ID ) . '">';
	$option .= $page->post_title;
	$option .= '</a></li>';
	echo $option;
  }
 ?>
</ul>
