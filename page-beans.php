<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content beansPage">

<!--     First Row begin-->        
        <div class="rowBeans">
              <div class="triple">
                <img src="" alt="">
                <h3 class="beansTitle">Beans Title</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
        </div>




      <?php // Start the loop ?>
      <?php if ( the_content() ) while ( the_content() ) : the_content(); ?>

        <h2><//?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <//?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>