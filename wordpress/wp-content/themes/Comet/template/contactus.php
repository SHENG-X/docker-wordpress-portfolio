<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header() ?>
  <div class="container contact-me">
    <div class="contact-me-form py-5">
      <?php 
        if (function_exists('Ninja_Forms') ) { 
          // The form id. 
          $form_id = '1'; 
            
          // NOTICE! Understand what this does before running. 
          Ninja_Forms()->display($form_id, false); 
        } 
      ?>
    </div>
  </div>
<?php get_footer() ?>