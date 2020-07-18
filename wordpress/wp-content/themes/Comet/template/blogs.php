<?php
/*
Template Name: Blogs
*/
?>
<?php get_header() ?>

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

<?php get_footer() ?>