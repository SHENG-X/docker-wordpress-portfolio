<?php
/*
Template Name: Blogs
*/
?>
<?php get_header() ?>
  <div class="container">
    <div class="blog-page-title pt-5">
      <h4>
        A Blog About Software Development And Life
      </h4>
    </div>
    <div class="blog-page-description">
      Thanks for visiting my blog
    </div>
  </div>
  <div class="container py-5">
      <div class="row">
        <div class="col-md-12 blogs-container">
          <?php
            // show all published blogs
            $args = array(
              'post_type'=> 'post',
              'orderby'    => 'ID',
              'post_status' => 'publish',
              'order'    => 'DESC',
              'posts_per_page' => 3 // this will retrive all the post that is published 
              );
              $result = new WP_Query( $args );
            if ( $result-> have_posts() ) :
                while ( $result->have_posts() ) : 
                  $result->the_post();
                  get_template_part( 'inc/section', 'blog-short');
                endwhile;
            endif; 
          ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer() ?>