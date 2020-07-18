<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body class="container">

<header>
  <div>
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'main-menu',
          'menu_class' => 'main-nav-bar',
        )
      )
    ?>
  </div>
</header>
