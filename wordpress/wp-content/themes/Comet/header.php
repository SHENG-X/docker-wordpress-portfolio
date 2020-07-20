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
        <div class="wrapper wrapper-header clearfix">
          <?php 
            get_template_part('inc/section', 'main-nav');
          ?>
          <div class="site-header-divider"></div>
        </div>
      </header>
      <div class="site-main">
        <div class="wrapper wrapper-main clearfix">
