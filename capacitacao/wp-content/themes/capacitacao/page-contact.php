<?php
/*
Template Name: Contact
*/
  get_header();
?>

<?php while(have_posts()): the_post(); ?>

  <div class="content" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">

    <div class="content-components">

        <div class="content-title">
          <h1><?php the_title(); ?></h1>
        </div>

        <div class="content-text">
          <h1 class="title-form">Contact me!</h1>

          <div class="forms">

              <form id="form" class="form-infos">
                  <div class="field">

                    <p>Name:</p>
                    <input type="text" name="name" size="35" class="input" required>
                    <p>E-mail:</p>
                    <input type="email" name="email" size="35" class="input" required>
                    <p>Subject:</p>
                    <input type="text" name="subject" size="35" class="input" required>
                    <p>Message:</p>
                    <textarea name="message" rows="8" cols="34" class="input" required></textarea>

                  </div>

                    <button type="button" name="formulario" class="button" onclick="myFunction()">Submit!</button>

                    <input type="hidden" name="hidden" value="1">
              </form>

          </div>

        </div>

    </div>

  </div>

<?php endwhile; ?>

<?php
  get_footer();
?>
