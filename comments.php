<?php 
/*

@package sunset-theme-alamin

*/

if( post_password_required() ){
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if( have_comments() ): ?>
		<h2 class="comment-title">
			<?php
				printf(
					esc_html( _nx( 'One Comment on &ldquo;%2$s&rdquo;', '%1$s Comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sunset-theme-alamin' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>
		<?php sunset_get_post_navigation(); ?>
		
		<ol class="comment-list">
			<?php 
				$args = array(
					'walker' 			=> null,
					'max_depth' 		=> '',
					'style' 			=> 'ol',
					'callback' 			=> null,
					'end-callback' 		=> null,
					'type'				=> 'all',
					'reply_text' 		=> 'Reply',
					'page' 				=> '',
					'per_page' 			=> '',
					'avatar_size' 		=> 64,
					'reverse_top_level' => null,
					'rever_children' 	=> '',
					'format' 			=> 'html5',
					'short_ping' 		=> false,
					'echo' 				=> true					
				);
				wp_list_comments( $args );			
			?>
		</ol>
		
		<?php sunset_get_post_navigation(); ?>
	
		<?php  if( !comments_open() && get_comments_number() ): ?>
			<p class="no-comments"><?php esc_html_e( 'Comments area closed', 'sunset-theme-alamin' ); ?></p>
		<?php endif; ?>
		
	<?php endif; ?>
	<?php
		$fields = array(
			'author' => 
				'<div class="form-group"><label for="author">' . __( 'Name', 'sunset-theme-alamin' ) . '<span class="required">*</span></label><input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
			'email' =>
				'<div class="form-group"><label for="email">' . __( 'Email', 'sunset-theme-alamin' ) . '<span class="required">*</span></label><input id="email" name="email" type="text" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required"/></div>',
			'url' => 
				'<div class="form-group last-field"><label for="url">' . __( 'Website', 'sunset-theme-alamin' ) . '</label><input id="url" name="url" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) .  '" /></div>'
		);
		$args = array(
			'class_submit' => 'btn btn-block btn-lg btn-warning',
			'label_submit' => __( 'Submit Comment', 'sunset-theme-alamin' ),
			'comment_field' => 
				'<div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) .  '</label><textarea id="comment" name="comment" class="form-control" rows="4" required="required">' . '</textarea></div>',
			'fields' => apply_filters( 'comment_form_default_fields', $fields )
		);
		comment_form( $args ); 
	?>
</div><!--  .comments-area -->