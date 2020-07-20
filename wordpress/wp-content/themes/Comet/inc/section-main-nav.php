<?php
  $menu_locations = get_nav_menu_locations();
  $menu_id = $menu_locations['main-menu'];
  $main_nav_items = wp_get_nav_menu_items($menu_id);
?>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="site-branding">
    <div class="site-title">
      <a href="/"><?php bloginfo( 'name' ); ?></a>
    </div>
    <div class="site-description" ><?php bloginfo( 'description' ); ?></div>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" \
  aria-expanded="false" aria-label="Toggle navigation"
  >
  <span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-nav-container collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    <?php foreach($main_nav_items as $main_nav_item) : ?>
      <a class="nav-item nav-link" href="<?php echo $main_nav_item->url; ?>"><?php echo $main_nav_item->title; ?></a>
    <?php endforeach; ?>
    </div>
  </div>
</nav>
