<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="section-title font-weight-bold text-center">
        Portfolios
      </h4>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="section-container">
        <div class="section-grid">
          <?php
            // show all published projects
            $args = array(
              'post_type'=> 'project',
              'orderby'    => 'ID',
              'post_status' => 'publish',
              'order'    => 'DESC',
              'posts_per_page' => -1 // this will retrieve all the post that is published 
              );
              $result = new WP_Query( $args );
            if ( $result-> have_posts() ) :
                while ( $result->have_posts() ) : 
                  $result->the_post();
                  get_template_part( 'inc/section', 'project-short');
                endwhile;
            endif; 
            wp_reset_postdata(); 
          ?>
        </div>
      </div>
    </div>
  </div>

  </div>
</div>