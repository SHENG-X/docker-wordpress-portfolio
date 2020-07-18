<?php if (have_posts()) : while (have_posts()): the_post(); ?>
  <h4>
    <?php the_title(); ?>
  </h4>
  <div>
    <?php
      echo get_the_date('l jS F, Y');
    ?>

    <?php
      $fname = get_the_author_meta('first_name');
      $lname = get_the_author_meta('last_name');
      echo "$fname $lname"
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
  <div>
    <?php the_content(); ?>
  </div>
<?php endwhile;endif;?>