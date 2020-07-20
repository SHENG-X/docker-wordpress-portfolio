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
  <div class="row">
    <div class="col-md-12">
      <h4>
        Skills
      </h4>
    </div>
    <div class="col-md-12">
      <div class="skills-container">
        <div class="skill-item">
          Frontend
        </div>
        <div class="skill-item">
          Backend
        </div>
        <div class="skill-item">
          Database
        </div>
        <div class="skill-item">
          Version Control
        </div>
        <div class="skill-item">
          Project Management Tools
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if(is_active_sidebar('front-page-projects')) :?>
        <?php dynamic_sidebar('front-page-projects') ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer() ?>