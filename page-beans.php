<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content beansPage">

<!--     First Row begin-->        
        <div class="rowBeans">
              <div class="triple">
              <?php // Start the loop ?>
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                  <h2><?php the_title(); ?></h2>
                  <?php the_content(); ?>

                <?php endwhile; // end the loop?>

              <!--   <img src="" alt="">
                <h3 class="beansTitle">Beans Title</h3>
                <p>Lorem ipsum dolor sit amet.</p> -->
              </div>
              <div class="triple">
                <?php // Start the loop ?>
                  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                  <?php endwhile; // end the loop?>

             
              </div>
              <div class="triple">
                <?php // Start the loop ?>
                  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                  <?php endwhile; // end the loop?>

              </div>
        </div>




      
    </div> <!-- /,content -->

    <//?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>