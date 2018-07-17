<?php
  get_header();
?>

<?php while(have_posts()): the_post(); ?>

  <div class="about">

  <div class="content" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">

    <div class="content-components">

        <div class="content-title">
          <h1><?php the_title(); ?></h1>
        </div>

        <div class="content-text">
            <?php the_content(); ?>

        </div>

    </div>

  </div>

</div>

<?php endwhile; ?>

<?php
  get_footer();
?>
