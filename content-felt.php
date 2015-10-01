<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'large') ); ?>
      <img src="<?php echo $url; ?>" class="">
    </div>
  </div>

  <div class="row">
    <?php
    $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order' ) );
    foreach( $mypages as $thepage ) {    
      $content = $thepage->post_content;
      if ( ! $content )
      continue;
      $content = apply_filters( 'the_content', $content ); ?>
      <div class="col-md-4">
        <h6><?php echo $thepage->post_title; ?></h6>        
        <?php echo $content; ?>
      </div>
      <?php } ?>
      <?php wp_reset_query(); ?>
  </div> <!-- /.row -->

</div> <!-- /.container -->
