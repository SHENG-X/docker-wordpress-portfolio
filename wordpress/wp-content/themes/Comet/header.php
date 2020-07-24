<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="container">
      <header class="site-header clearfix" role="banner">
        <?php 
          get_template_part('inc/section', 'main-nav');
        ?>
        <div class="intro-container">
          <div class="wrapper wrapper-main container clearfix">
            <div class="row">
              <div class="intro col-md-8">
                <div class="leading-label">
                  Hello, my name is
                </div>
                <div class="bio mb-3">
                  <?php if(is_active_sidebar('front-page-intro')) :?>
                    <?php dynamic_sidebar('front-page-intro') ?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-md-4">
                <?php if(is_active_sidebar('front-page-pic')) :?>
                  <?php dynamic_sidebar('front-page-pic') ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="site-main">
        <div class="wrapper wrapper-main clearfix">
