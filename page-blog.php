<?php 

/* Template Name:page-blog.php */

 ?>



<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content clearfix">

      <div class="blogPage">
          <?php // Start the loop ?>
         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

         <?php endwhile; // end the loop?>
      </div>



        <div class="blogArea">
          <!--     start of query loop  -->    
              <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array(
                'posts_per_page' => 5, // custom post type
                       'paged'=>$paged,'category_name' => 'Uncategorized'
                      ));
              ?>  
          <!--     Start of loop -->    
              <?php if(have_posts()) while(have_posts()) : the_post(); ?>

                   <article>
                        <header class="major">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                      
                        <h2><?php single_post_title( 'Current post: ' ); ?></h2>
                        <span class="image image-full"><?php the_post_thumbnail('full'); ?></span>

                        <?php the_excerpt(); ?>
                      </article>
              <?php endwhile; ?><!--  end of loop -->
      </div> <!-- Blog area end -->

       <div class="sidebarArea">
        <?php get_sidebar(); ?>
        <?php //get_template_part( 'loop', 'index' ); ?>
      </div>
    </div> <!--/.content -->
  
 
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>






<!-- Delete here -->

     
   