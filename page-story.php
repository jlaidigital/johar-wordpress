<?php get_header();  ?>

<div class="main">
  <div class="container">
  <p>Editing page.php</p>
    <div class="content">
      
        <div class="four">
          <img src="" alt="">
        </div>
        <div class="six">
          <h3 class="storyTitle"> <?php the_title() ?></h3>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsum dolorum necessitatibus! Nobis veritatis quis aperiam officia reprehenderit magni officiis eligendi odit, iusto quaerat voluptas culpa. Laborum ut odio vero.</p>
        </div>

    </div> <!-- /,content -->





      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

  <//?php get_template_part( 'loop', 'index' ); ?>

    <//?php get_sidebar(); ?>
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>