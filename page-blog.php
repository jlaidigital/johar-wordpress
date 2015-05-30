



<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">

    <?php if(have_posts()) while(have_posts()) : the_post(); ?>

   <article>
        <header class="major">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
      
        <h2><?php single_post_title( 'Current post: ' ); ?></h2>



        <span class="image image-full"><?php the_post_thumbnail('full'); ?></span>

        <?php the_excerpt(); ?>

      </article>
    <?php endwhile; ?>


    </div> <!--/.content -->
  
<!--  middle giant pictures-->    

<!--    Special menu -->
   


    <?php get_sidebar(); ?>


    <?php //get_sidebar(); ?>
    <?php //get_template_part( 'loop', 'index' ); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>






<!-- Delete here -->

     
   