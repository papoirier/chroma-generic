<?php 

if (have_posts()) :
  while ( have_posts() ) : the_post(); ?>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><?php the_title(); ?></h4>
        </div>
        <div class="modal-body">
          <div class="te">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>  <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->

<?php 
  endwhile; 
endif; 
?>