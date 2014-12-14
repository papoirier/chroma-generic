<div class="container">
	<div class="row">

		<!-- STRUCTURAL - - - - - - - - - - - - - - -  -->
		<?php $my_query = new WP_Query( 'page_id=124' ); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

		<div class="col-md-4 structural">
			<div>
				<?php the_post_thumbnail(); ?>
			</div>
			<div>
			    <h4><?php the_title(); ?></h4>
		    </div>

	        <?php the_content(); ?>
	    </div> <!-- /.structural -->
	    <?php endwhile; ?>

	    <!-- SUPPLE - - - - - - - - - - - - - - -  -->
		<?php $my_query = new WP_Query( 'page_id=126' ); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

		<div class="col-md-4 structural">
			<div>
				<?php the_post_thumbnail(); ?>
			</div>
			<div>
			    <h4><?php the_title(); ?></h4>
		    </div>

	        <?php the_content(); ?>
	    </div> <!-- /.supple -->
	    <?php endwhile; ?>

	    <!-- SOFT - - - - - - - - - - - - - - -  -->
		<?php $my_query = new WP_Query( 'page_id=134' ); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

		<div class="col-md-4 structural">
			<div>
				<?php the_post_thumbnail(); ?>
			</div>
			<div>
			    <h4><?php the_title(); ?></h4>
		    </div>

	        <?php the_content(); ?>
	    </div> <!-- /.soft -->
	    <?php endwhile; ?>

	</div>
</div>