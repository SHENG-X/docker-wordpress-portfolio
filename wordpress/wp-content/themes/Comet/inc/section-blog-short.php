<div class="blog-short-container flex">
  <?php if (has_post_thumbnail()): ?>
    <img
      class="blog-thumbnail"
      src="<?php the_post_thumbnail_url('blog-small'); ?>"
      alt="<?php the_title(); ?>"
    />
  <?php else:?>
    <img
      class="blog-thumbnail"
      src="https://www.officespacesny.com/wp-content/themes/realestate-7/images/no-image.png"
      alt="No image available"
    />
  <?php endif;?>
  <div class="py-3 px-3 mb-4">
    <h4>
      <a
        href="<?php the_permalink(); ?>"
      >
        <?php the_title(); ?>
      </a>
    </h4>
    <div class="excerpt">
      <?php the_excerpt(); ?>
    </div>
    <div class="read-more">
      <a
        href="<?php the_permalink(); ?>"
      >
        Read more
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <div class="post-short-footer pt-3">
      <div class="post-date px-3">
        <i class="far fa-clock mr-1"></i>
        <?php echo get_the_date('m/d/Y'); ?>
      </div>
      <div class="comments-number px-3">
        <i class="far fa-comment-alt mr-1"></i>
        <?php $comment_number = get_comments_number(); ?>
        <?php if($comment_number > 1): ?>
          <span>
            <?php echo $comment_number; ?>
            Comments
          </span>
        <?php else: ?>
          <span>
            <?php echo $comment_number; ?>
            Comment
          </span>
        <?php endif;?>
      </div>
    </div>
</div>

