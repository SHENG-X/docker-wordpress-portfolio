<div class="row">
  <div class="col-md-12">
      <h4>
        Portfolios
      </h4>
    </div>
    <div class="col-md-12 projects-container">
      <?php
        // show all published blogs
        $args = array(
          'post_type'=> 'project',
          'orderby'    => 'ID',
          'post_status' => 'publish',
          'order'    => 'DESC',
          'posts_per_page' => -1 // this will retrive all the post that is published 
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