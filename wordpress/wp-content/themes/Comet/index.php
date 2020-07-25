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
            // if there is archived post, get all
            // and display them in blog short component
            if (have_posts()) : 
              while (have_posts()): 
                the_post();
                get_template_part( 'inc/section', 'blog-short');
              endwhile;
            endif;
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php the_posts_pagination(); ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer() ?>