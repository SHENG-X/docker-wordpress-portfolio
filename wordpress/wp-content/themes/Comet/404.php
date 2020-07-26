<?php get_header() ?>
  <div class="container error404-content py-5">
    <div class="label404">
      404
    </div>
    <div class="py-5 px-5">
      <div class="entry-title">
        <?php _e( 'Sorry, the page you are looking for doesn\'t exist.', 'comet' ); ?>
      </div>
      <div class="buttons mt-3">
        <a class="btn btn-primary" href="/">
          Go to Home
        </a>
        <a class="btn btn-primary" href="/contact">
          Contact Me
        </a>
      </div>
    </div>
  </div><!-- .section-inner -->

<?php get_footer() ?>