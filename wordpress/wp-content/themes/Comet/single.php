<?php get_header() ?>
  <div class="single-content container py-5">
    <?php get_template_part( 'inc/section', 'blog-content'); ?>
    <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>
  </div>
<?php get_footer() ?>
