<?php
  $menu_locations = get_nav_menu_locations();
  $menu_id = $menu_locations['main-menu'];
  $main_nav_items = wp_get_nav_menu_items($menu_id);
?>
<nav class="navbar navbar-expand-lg navbar-light">
  <?php get_template_part('inc/section', 'social-media')?>
  <button class="navbar-toggler btn btn-primary" type="button" data-toggle="collapse" 
    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" \
    aria-expanded="false" aria-label="Toggle navigation"
  >
  <i class="fas fa-bars"></i>
</button>
<div class="navbar-nav-container collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    <?php foreach($main_nav_items as $main_nav_item) : ?>
      <?php
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      ?>
      <a class="nav-item nav-link <?php if ($main_nav_item->url == $url) : echo 'active'; endif; ?>" href="<?php echo $main_nav_item->url; ?>"><?php echo $main_nav_item->title; ?></a>
    <?php endforeach; ?>
    </div>
  </div>
</nav>
