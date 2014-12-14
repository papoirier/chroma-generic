<?php 
/*
 * 91 - 112
 * 93
 * 96
 * 98
 */ 
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID, 'full') ); ?>
      <img src="<?php echo $url; ?>" class="">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel-group" id="accordion-the-felt" role="tablist" aria-multiselectable="true">
      <?php
      $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order' ) );
      foreach( $mypages as $thepage ) {    
        $content = $thepage->post_content;
        if ( ! $content )
        continue;
        $content = apply_filters( 'the_content', $content ); ?>
        <div class="panel panel-default" id="<?php echo $thepage->ID;?>">
          <div class="panel-heading" role="tab" id="heading-<?php echo $thepage->ID;?>">
              <p>
                <a data-toggle="collapse" data-parent="#accordion-the-felt" href="#collapse-<?php echo $thepage->ID;?>" aria-expanded="true" aria-controls="collapse-<?php echo $thepage->ID;?>">
                  <?php echo $thepage->post_title; ?>
                </a>
              </p>
           </div>
           <div id="collapse-<?php echo $thepage->ID; ?>" class="panel-collapse collapse <?php if (($thepage->ID == 91) || ($thepage->ID == 112)) { echo 'in'; } ?>" role="tabpanel" aria-labelledby="heading-<?php echo $thepage->ID; ?>">
              <div class="panel-body">
                 <?php echo $content; ?>
              </div>
           </div>
        </div>
      <?php } ?>
      <?php wp_reset_query(); ?>
      </div> <!-- /.panel-group -->
    </div> <!-- /.col-md-6 -->
  </div> <!-- /.row -->
  <?php the_content(); ?>
</div> <!-- /.container -->
