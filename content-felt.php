<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if (has_post_thumbnail( $loop->post->ID )) {
        the_post_thumbnail( 'large' );
      } ?>
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
