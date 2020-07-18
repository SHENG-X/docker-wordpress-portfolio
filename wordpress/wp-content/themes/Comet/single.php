<?php get_header() ?>
  <div class="container">
    <?php if(has_post_thumbnail()) : ?>
      <img
        class="img-thumbnail img-fluid"
        src="<?php the_post_thumbnail_url('blog-large'); ?>"
        alt="<?php the_title(); ?>"
      />
    <?php endif;?>
    <?php get_template_part( 'inc/section', 'blog-content'); ?>
  </div>
<?php get_footer() ?>
