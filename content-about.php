<div class="container top-pad"> 
    <div class="row content">
        <div class="col-md-4">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'medium') ); ?>
            <img src="<?php echo $url; ?>" class="img-circle">
        </div>
        <div class="col-md-6">
            <h4><?php the_title(); ?></h4>
    	   <?php the_content(); ?>
		</div>
    </div> <!-- .row.content -->
    
    <div class="row">
        <div class="col-md-6">
	        <?php edit_post_link( __( 'Edit page', 'woothemes' ), '<h5 class="btn btn-default btn-edit-page">', '</h5>' ); ?>
        </div>
    </div>
</div><!-- .container.top-pad -->