<?php get_header();  ?>

<div class="main">
  <div class="container">
  <p>Editing page.php</p>
    <div class="content">

        <div class="three">
          <h3 class="contactTitle">Address</h3>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, quas, reiciendis! Error sed quis, quam, minima qui deserunt fugiat, at eligendi dicta enim earum laudantium.</p>
        </div>

        <div class="seven">
          <div class="form">form plugin</div>
        </div>




      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>