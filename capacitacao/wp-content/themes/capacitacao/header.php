<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Capacitação byron</title>
    <?php wp_head(); ?>

  </head>
  <body>

  <header class="header">
    <div class="header-title">

      <h1 class="wp-title"><?php echo get_bloginfo('name'); ?></h1>

    </div>
  </header>

  <!--Adiciona menu-->
  <div class="menu-header">
    <div class="menu-options">
      <?php
          $op = array(
              'theme_location' => 'menu-header',
              'container' => 'nav',
              'container_class' => 'menu-nav'
          );
          wp_nav_menu($op);
      ?>
    </div>
  </div>
