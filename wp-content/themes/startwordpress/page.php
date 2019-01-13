<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">
			<h3 class="blog-post-title"><?php the_title(); ?></h3>
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile; endif;
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>
