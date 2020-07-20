<?php if (have_posts()) : while (have_posts()): the_post(); ?>
  <h4>
    <?php the_title(); ?>
  </h4>
  <div>
    <?php
      echo get_the_date('m/d/Y');
    ?>
  </div>
  <div>
    <?php if(has_post_thumbnail()) : ?>
      <img
        class="img-thumbnail img-fluid"
        src="<?php the_post_thumbnail_url('blog-large'); ?>"
        alt="<?php the_title(); ?>"
      />
    <?php endif;?>
  </div>
  <div>
    <?php the_content(); ?>
  </div>
  <div class="mb-3">
    <?php
      $fname = get_the_author_meta('first_name');
      $lname = get_the_author_meta('last_name');
      echo "Posted by: "."$fname $lname"
    ?>

    <?php
      $tags = get_the_tags();
      if (!empty($tags)) :
        foreach($tags as $tag):
    ?>
      <a
        class="badge badge-success"
        href="<?php echo get_tag_link($tag->term_id); ?>"
      >
       <?php echo $tag->name; ?>
      </a>
    <?php 
        endforeach;
      endif;
    ?>

    <?php
      $categories = get_the_category();
      if (!empty($categories)) :
        foreach($categories as $category):
    ?>
      <a
        href="<?php echo get_category_link($category->term_id); ?>"
      >
       <?php echo $category->name; ?>
      </a>
    <?php 
        endforeach;
      endif;
    ?>
  </div>
<?php endwhile;endif;?>