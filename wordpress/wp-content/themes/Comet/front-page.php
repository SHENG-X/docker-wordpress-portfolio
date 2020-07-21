<?php get_header() ?>

<div class="font-page-content">
  <div class="row">
    <div class="intro col-md-8">
      <div>
        <?php if(is_active_sidebar('front-page-intro')) :?>
          <?php dynamic_sidebar('front-page-intro') ?>
        <?php endif; ?>
      </div>
      <div class="social-media">
        <?php if(is_active_sidebar('front-page-social')) :?>
          <?php dynamic_sidebar('front-page-social') ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php if(is_active_sidebar('front-page-pic')) :?>
        <?php dynamic_sidebar('front-page-pic') ?>
      <?php endif; ?>
    </div>
  </div>
  <?php get_template_part('inc/section', 'skills')?>
  <?php get_template_part('inc/section', 'portfolio')?>
</div>

<?php get_footer() ?>