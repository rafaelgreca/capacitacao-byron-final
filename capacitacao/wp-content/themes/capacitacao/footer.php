<footer>
  <?php
      $op = array(
          'theme_location' => 'menu-header',
          'container' => 'nav',
          'after' => '<span>  </span>'
      );
      wp_nav_menu($op);
  ?>
</footer>

<!--Adiciona menu social-->
<div class="social-menu">
  <div class="social-info">
    <?php
        $info = array(
            'theme_location' => 'menu-social',
            'container' => 'nav',
            'container_class' => 'socials-nav',
            'container_id'  => 'socials-nav',
            'link_before'   => '<span class="social-text">',
            'link_after' => '</span>'
        );
        wp_nav_menu($info);
    ?>
  </div>
  <div class="email">
      <p>rafaelgreca97@hotmail.com</p>
  </div>
  <div class="developed">
      <p>Developed by byron.solutions</p>
  </div>
</div>

</body>
</html>
