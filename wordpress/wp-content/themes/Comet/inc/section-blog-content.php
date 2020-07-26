<?php if (have_posts()) : while (have_posts()): the_post(); ?>
  <div class="blog-post-content pb-5">
    <h4>
      <?php the_title(); ?>
    </h4>
    <div>
      <?php
        echo get_the_date('j F, Y');
      ?>
    </div>
    <div>
      <?php
        $tags = get_the_tags();
        if (!empty($tags)) :
          foreach($tags as $tag):
      ?>
        <a
          href="<?php echo get_tag_link($tag->term_id); ?>"
        >
        <i class="fa fa-tag"></i>
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
          <i class="fa fa-tag"></i>
          <?php echo $category->name; ?>
        </a>
      <?php 
          endforeach;
        endif;
      ?>
    </div>
    <div class="py-3">
      <?php if(has_post_thumbnail()) : ?>
        <img
          class="img-fluid"
          src="<?php the_post_thumbnail_url('blog-large'); ?>"
          alt="<?php the_title(); ?>"
        />
      <?php endif;?>
    </div>
    <div>
      <?php the_content(); ?>
    </div>
  </div>
<?php endwhile;endif;?>
