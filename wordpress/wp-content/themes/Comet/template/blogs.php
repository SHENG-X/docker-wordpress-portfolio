<?php
/*
Template Name: Blogs
*/
?>
<?php get_header() ?>
  <div class="row">
    <div class="col-md-3">
      <?php if(is_active_sidebar('blog-page-sidebar')) :?>
        <?php dynamic_sidebar('blog-page-sidebar') ?>
      <?php endif; ?>
    </div>

    <div class="col-md-9">
      <?php
        // show all published blogs
        $args = array(
          'post_type'=> 'post',
          'orderby'    => 'ID',
          'post_status' => 'publish',
          'order'    => 'DESC',
          'posts_per_page' => -1 // this will retrive all the post that is published 
          );
          $result = new WP_Query( $args );
        if ( $result-> have_posts() ) :
            while ( $result->have_posts() ) : 
              $result->the_post();
              get_template_part( 'inc/section', 'blog-short');
            endwhile;
        endif; 
        wp_reset_postdata(); 
      ?>
    </div>
  </div>
<?php get_footer() ?>