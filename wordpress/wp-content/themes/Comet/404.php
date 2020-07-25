<?php get_header() ?>
  <div class="container error404-content py-5">
    <h1>
      404
    </h1>
    <h4 class="entry-title">
      <?php _e( 'Page Not Found', 'comet' ); ?>
    </h4>

    <div class="intro-text">
      <p>
        <?php _e( 'The page you were looking for could not be found. 
          It might have been removed, renamed, or did not exist 
          in the first place.', 'comet' ); ?>
      </p>
    </div>
    <?php
      get_search_form(
        array(
          'label' => __( '404 not found', 'comet' ),
        )
      );
    ?>

  </div><!-- .section-inner -->

<?php get_footer() ?>