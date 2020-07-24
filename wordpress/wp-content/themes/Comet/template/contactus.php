<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header() ?>
  <div class="container contact-me">
    <div class="contact-extra">
      <div class="contact-social-media comet-card p-5">
        <div class="description">
        I'm currently seeking a front-end developer / full-stack developer position.
        If you are interested in hiring me for your project please 
        use the form below to get in touch. 
        </div>
        <div class="social-media-label py-3">
          You can also find me on the following channels
        </div>
        <div class="social-media-links">
        <?php get_template_part('inc/section', 'social-media')?>
        </div>
      </div>
    </div>
    <div class="contact-me-form py-5">
      <?php 
        if (function_exists('Ninja_Forms') ) :
          // The form id. 
          $form_id = '1'; 
            
          // NOTICE! Understand what this does before running. 
          Ninja_Forms()->display($form_id, false); 
        endif;
      ?>
    </div>
  </div>
<?php get_footer() ?>