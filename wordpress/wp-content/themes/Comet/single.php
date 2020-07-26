<?php get_header() ?>
  <div class="single-content container py-5">
    <?php get_template_part( 'inc/section', 'blog-content'); ?>
    
    <div class="prv-next-buttons mb-5">
      <?php 
        previous_post_link('
          <div class="prev-post">
            <span class="btn btn-primary">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              %link
            </span>
          </div>', 
          __('Previous', 'domain')
        ); 
      ?>    
      <?php
        next_post_link('
          <div class="next-post">
            <span class="btn btn-primary">
            %link
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
          </div>', 
        __('Next', 'domain'));
      ?>
    </div>

   <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>
  </div>
<?php get_footer() ?>
