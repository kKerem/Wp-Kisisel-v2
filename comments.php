<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h6 class="mb-4 pb-4 border-bottom"><i class="fas fa-comments text-black-50 mr-1"></i> <?php comments_number(); ?></h6>

	
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>

<?php
$fields =  array(

	'author' =>
	  '<div class="form-group row">
	  	<div class="col-sm">
	  		<input id="author" name="author" class="form-control shadow-sm my-2" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	  		'" size="30"' . $aria_req . ' placeholder="Isminiz" />',
  
	'email' =>
	  '</div>
	  <div class="col">
	  	<input id="email" name="email" class="form-control shadow-sm my-2" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	  '" size="30"' . $aria_req . ' placeholder="Mail Adresi" />
	  </div>
		</div>',
  );
$yorum = array(
    'id_form'           => 'commentform',
    'class_form'     	=> 'border-top pt-4 mt-3',
    'id_submit'         => 'submit',
    //'submit_button'     => '<button name="%1$s" type="submit" id="%2$s" class="%3$s"/><i class="fas fa-paper-plane mr-2"></i> %4$s</button',
    'class_submit'      => 'btn btn-sm btn-primary width-100 shadow-sm col-sm-auto',
	'name_submit'       => 'submit',
	'title_reply_before'=> '<h6 id="reply-title" class="comment-reply-title mt-2"><i class="fas fa-reply text-black-50 mr-2"></i> Mesaj Yaz',
    'title_reply'       => __( '' ),
    'title_reply_to'    => __( 'Leave a Reply to %s' ),
    'cancel_reply_link' => __( 'Cancel Reply' ),
    'label_submit'      => __( 'Mesajı Gönder' ),
    'format'            => 'xhtml',
  
    'comment_field' =>  '<div class="form-group row">
	<div class="col-sm-12">
		<textarea id="comment" class="form-control shadow-sm" name="comment" cols="45" rows="5" aria-required="true" placeholder="Mesajınız">' .
      '</textarea>
	  </div>
  </div>',
  
    'must_log_in' => '<p class="must-log-in">' .
      sprintf(
        __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
        wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
      ) . '</p>',
  
	'logged_in_as' => '
	<div class="row">
		<div class="col-7">' .
      sprintf(
	  __( '<input class="form-control shadow-sm" type="text" value="%2$s" size="30" disabled></div>
	  <div class="col-5 text-right">
		<a href="%3$s" title="Log out of this account" class="ml-3 float-sm-right btn btn-danger"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a>
			
		</div>
	</div>' ),
        admin_url( 'profile.php' ),
        $user_identity,
        wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
      ) . '</p>',
  
    'comment_notes_before' => '',
  
    'fields' => apply_filters( 'comment_form_default_fields', $fields ),
  );
comment_form($yorum); ?>

</div>
