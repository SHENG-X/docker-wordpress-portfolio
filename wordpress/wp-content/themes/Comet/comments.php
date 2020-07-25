<!-- <?php
  //Get only the approved comments
  $args = array(
    'status' => 'approve'
  );

  // The comment Query
  $comments_query = new WP_Comment_Query;
  $comments = $comments_query->query( $args );

  // Comment Loop
  if ( $comments ) {
  foreach ( $comments as $comment ) {
    echo '<p>' . $comment->comment_content . '</p>';
  }
  } else {
    echo 'No comments found.';
  }
?> -->
<div class="comments-inner">
  <?php
    wp_list_comments(
      array(
        'avatar_size'=>120,
        'style' => 'div',
      )
    );
  ?>
</div>
<div class="reply-form-container">
    <?php
      if (comments_open()) :
        comment_form(
          array(
            'class_form' => 'reply-form',
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'after' => '</h2>'
          )
        );
      endif;
    ?>
</div>