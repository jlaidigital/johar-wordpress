<?php 

/* Template Name:page-menu.php */

 ?>


<?php get_header();  ?>

<div class="main">
  <div class="container">

<!--     <div class="menuBanner">Banner</div>
 -->
<!--   <p>Editing Menu page.php</p>
 -->    <div class="content">

<!-- This Loop its pulling menu page content -->  
    <div class="pageTitle">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php echo get_the_content(); ?>
        <?php endwhile; // end the loop?>
    </div>
      <div class="leftlist">
         <?php // Start the loop ?>
    
<!--     This Loop its pulling posts under the category "menuLeft" -->    
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array(
      'posts_per_page' => 4, // custom post type
             'paged'=>$paged, 'category_name' => 'menuLeft','orderby' => 'title', 'order' => 'DESC' 
            ));
    ?>  

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
      </div>

      <div class="rightlist">
         <?php // Start the loop ?>

   <!--     This Loop its pulling posts under the category "menuRight" --> 
   <!--    'category_name' => 'menuRight', 'orderby' => 'title', 'order' => 'DESC'  < taking from the order>
         <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array(
      'posts_per_page' => 5, // custom post type
             'paged'=>$paged, 'category_name' => 'menuRight', 'orderby' => 'title', 'order' => 'DESC' 
            ));
    ?>  
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
      </div>


     
    </div> <!-- /,content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>