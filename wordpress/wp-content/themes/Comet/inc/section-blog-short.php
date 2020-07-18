<div style="display: flex">
  <?php if (has_post_thumbnail()): ?>
    <img
      class="img-thumbnail"
      src="<?php the_post_thumbnail_url('blog-small'); ?>"
      alt="<?php the_title(); ?>"
    />
  <?php endif;?>
  <div>
    <h4>
      <?php the_title(); ?>
    </h4>
    <?php the_excerpt(); ?>
  </div>
</div>
<a
  class="btn btn-primary" 
  href="<?php the_permalink(); ?>"
>
  Read more
</a>
