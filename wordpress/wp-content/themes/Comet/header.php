<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="container">
      <header class="site-header clearfix" role="banner">
        <?php 
          get_template_part('inc/section', 'main-nav');
        ?>
        <div class="intro-container">
          <div class="wrapper wrapper-main clearfix">
            <div class="row">
              <div class="intro col-md-8">
                <div class="leading-label">
                  Hello, my name is
                </div>
                <h2 class="mt-0 display-4 font-weight-bold">
                  Sheng Xiao
                </h2>
                <div class="bio mb-3">
                  I am a full stack web application developer.  I have over two years enterprise web application development experiences. I am enthusiasm for coding and programming. Don’t hesitate to contact me if you need some help.
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
