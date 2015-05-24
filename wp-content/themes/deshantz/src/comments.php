<section class="section-gray section-comments">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <div id="comments" class="comments">
         <?php if (post_password_required()) : ?>
           <p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
         </div>

         <?php return; endif; ?>

         <?php if (have_comments()) : ?>

           <h5 class="subtitle text-center"><?php comments_number(); ?></h5>

           <ul>
            <?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
          </ul>

        <?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

         <p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

       <?php endif; ?>

       <?php comment_form(array(
        'comment_notes_after' => '',
        'comment_field' =>  '<div class="comment-form-comment"><label for="comment">' . _x( 'Type your comment below', 'noun' ) .
        '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
        '</textarea></div>',
        'fields' => array(
                      'author' =>
                        '<div class="comment-form-author">' .
                        '<input id="author" name="author" placeholder="Your name" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                        '" size="30" required /></div>',
                      'email' =>
                        '<div class="comment-form-email">' .
                        '<input id="email" name="email" type="text" placeholder="Your e-mail" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" size="30" required /></div>',
                      ),

      'comment_notes_before' => ''

        )); ?>

      </div>
    </div>
  </div>
</section>
