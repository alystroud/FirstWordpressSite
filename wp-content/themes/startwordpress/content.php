<div class="blog-post">
	  <?php if ( has_post_thumbnail() ) {?>
   	<div class="row">
   		<div class="col-md-4 thumbnail">
   			<?php	the_post_thumbnail('thumbnail'); ?>
   		</div>
   		<div class="col-md-6">
				<h4 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p class="blog-post-meta"><?php the_date(); ?> |
			    <a href="<?php comments_link(); ?>">
			      <?php
			      printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
			    </a></p>
   			<?php the_excerpt(); ?>
   		</div>
   	</div>
   	<?php } else { ?>
   	<?php the_excerpt(); ?>
   	<?php } ?>

</div><!-- /.blog-post -->
