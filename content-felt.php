<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'full') ); ?>
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
        <h5><?php echo $thepage->post_title; ?></h5>        
        <?php echo $content; ?>
      </div>
      <?php } ?>
      <?php wp_reset_query(); ?>
  </div> <!-- /.row -->

  <div class="row top-pad">
    <div class="col-md-6">
      <?php the_content(); ?>
    </div>
  </div>

</div> <!-- /.container -->
