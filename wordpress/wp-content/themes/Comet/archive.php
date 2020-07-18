<?php get_header() ?>
  <?php
    // if there is archived post, get all
    // and display them in blog short component
    if (have_posts()) : 
      while (have_posts()): 
        the_post();
        get_template_part( 'inc/section', 'blog-short');
      endwhile;
    endif;
  ?>
  <div>
    <!-- show previous and next blog button -->
    <?php previous_post_link(); ?>
    <?php next_post_link(); ?>
  </div>

<?php get_footer() ?>
