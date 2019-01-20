<?php if ( post_password_required() ) {
	return;
} ?>
	<div id="comments" class="comments-area">
		<?php comment_form(array('title_reply'=>'Leave Me A Comment:')); ?>
		<?php if ( have_comments() ) : ?>
			<h4 class="comments-title">
				<?php
				printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title'),
					number_format_i18n( get_comments_number() ), get_the_title() );
				?>
			</h4>
			<ul class="comment-list thumbnail">
				<?php
				wp_list_comments( array(
					'short_ping'  => true,
					'avatar_size' => 100,
				) );
				?>
			</ul>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'No comments yet.' ); ?>
			</p>
		<?php endif; ?>
	</div>
