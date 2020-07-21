<?php get_header() ?>
  <div class="single-content">
    <?php the_title(); ?>
    Start Date: <?php the_field('start_date'); ?>
    End Date: <?php the_field('end_date'); ?>
    Description: <?php the_field('description'); ?>
  </div>
<?php get_footer() ?>
