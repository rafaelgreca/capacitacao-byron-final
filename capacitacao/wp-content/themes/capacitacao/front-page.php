<?php
  get_header();
?>

<?php while(have_posts()): the_post(); ?>

  <div class="content-front" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">

    <div class="content-components">

        <div class="content-front-text">
            <?php the_content(); ?>

        </div>

        <?php $url = get_page_by_title('About'); ?>
        <a class="button" href="<?php echo get_permalink($url->ID); ?>">Click here to read more</a>


    </div>

  </div>

<?php endwhile; ?>

  <section class="carousel">

    <h1>CAROUSEL</h1>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!--<ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" active></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>-->

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 1)); ?>
          <?php $count = 0; ?>
          <?php foreach($slider as $slide): ?>
          <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive"/>
          </div>
          <?php $count++; ?>
        <?php endforeach; ?>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="fa fa-arrow-circle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="fa fa-arrow-circle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>


    <section class="form-front" style="background-color: black;">

      <div class="content-text">

        <h1 class="title-form" style="color: white;">Contact me!</h1>

        <div class="forms">

            <form id="form" class="form-infos">
                <div class="field">

                  <p style="color: white;" class="text">Name:</p>
                  <input type="text" name="name" size="35" class="input" style="border: 2px solid gray"; required>
                  <p style="color: white;" class="text">E-mail:</p>
                  <input type="email" name="email" size="35" class="input" style="border: 2px solid gray"; required>
                  <p style="color: white;" class="text">Subject:</p>
                  <input type="text" name="subject" size="35" class="input" style="border: 2px solid gray"; required>
                  <p style="color: white;" >Message:</p>
                  <textarea name="message" rows="8" cols="34" class="input" style="border: 2px solid gray"; required></textarea>

                </div>

                  <button type="button" name="formulario" class="button" onclick="myFunction()">Submit!</button>

                  <input type="hidden" name="hidden" value="1">
            </form>

        </div>

      </div>

    </section>

<?php
  get_footer();
?>
