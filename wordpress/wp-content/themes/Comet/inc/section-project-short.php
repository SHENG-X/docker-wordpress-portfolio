<div class="project-short">
  <?php if (has_post_thumbnail()): ?>
    <img
      src="<?php the_post_thumbnail_url('blog-small'); ?>"
      alt="<?php the_title(); ?>"
    />
  <?php endif;?>
  <div class="details">
    <h5>
      <?php the_title(); ?>
    </h5>
    <?php the_field('bref'); ?>
    
  </div>
  <div class="view-project">
    <a
      class="btn btn-primary" 
      href="<?php the_permalink(); ?>"
    >
      Read more
    </a>
  </div>
</div>
