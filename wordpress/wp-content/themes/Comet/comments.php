<?php
  if (!comments_open()) {
    return;
  }
?>
<?php
  if(have_comments()) {
    //Get only the approved comments
    $args = array(
      'status' => 'approve',
      'post_id' => get_post() -> ID,
    );

    // The comment Query
    $comments_query = new WP_Comment_Query;
    $comments = $comments_query->query( $args );

    // Comment Loop
    if ( $comments ) {
      $label = 'Comment';
      if (sizeof( $comments ) > 1) {
        $label = 'Comments';
      }
      echo '<div class="comment-title pb-3">' . sizeof($comments). ' ' .$label ."</div>";
    }
  } else {
    echo '<div class="comment-title pb-3">' . 'No comments found' ."</div>";
  }
?>
<div class="comments-inner">
  <?php
    if (have_comments()) {
      wp_list_comments(
        array(
          'avatar_size' => 80,
          'style' => 'div',
        ),
        $comments
      );
    }
  ?>
</div>

<div class="reply-form-container pt-3">
    <?php
      //Declare Vars
      $comment_send = 'Send';
      $comment_reply = 'Leave a Reply';
      $comment_reply_to = 'Reply';
      
      $comment_author = 'Name';
      $comment_email = 'Email';
      $comment_body = 'Comment';
      $comment_url = 'Website';
      $comment_cookies_1 = ' By commenting you accept the';
      $comment_cookies_2 = ' Privacy Policy';
      
      $comment_before = '';
      
      $comment_cancel = 'Cancel Reply';
      
      //Array
      $comments_args = array(
          //Define Fields
          'fields' => array(
              //Author field
              'author' => '<p class="comment-form-author"><input id="author" class="form-control" name="author" aria-required="true" placeholder="' . $comment_author .'" required></input></p>',
              //Email Field
              'email' => '<p class="comment-form-email"><input id="email" class="form-control" name="email" placeholder="' . $comment_email .'" required></input></p>',
              //URL Field
              'url' => '<p class="comment-form-url"><input id="url" class="form-control" name="url" placeholder="' . $comment_url .'"></input></p>',
              //Cookies
              'cookies' => '<input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
          ),
          // Change the title of send button
          'label_submit' => __( $comment_send ),
          'submit_button' => '<input name="%1$s" class="btn btn-primary mt-3" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
          // Change the title of the reply section
          'title_reply' => __( $comment_reply ),
          // Change the title of the reply section
          'title_reply_to' => __( $comment_reply_to ),
          //Cancel Reply Text
          'cancel_reply_link' => __( $comment_cancel ),
          // Redefine your own textarea (the comment body).
          'comment_field' => '<p class="comment-form-comment"><textarea id="comment" class="form-control" name="comment" rows="6" aria-required="true" placeholder="' . $comment_body .'" required></textarea></p>',
          //Message Before Comment
          'comment_notes_before' => __( $comment_before),
          // Remove "Text or HTML to be displayed after the set of comment fields".
          'comment_notes_after' => '',
          //Submit Button ID
          'id_submit' => __( 'comment-submit' ),
      );
      comment_form( $comments_args );
    ?>
</div>