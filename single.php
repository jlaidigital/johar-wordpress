<?php get_header(); ?>
<div class="wrapper clearfix">
<div class="main">
  <div class="container">
  <p>Hi! I am CHANGING single.php</p>

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
            
          
          <h2>About <?php the_author(); ?> </h2>
       

          <h2>About <?php the_author(); ?> </h2>
          <?php echo get_avatar( get_the_author_meta('user_email'), 160); ?>
          <?php the_author_meta('description'); ?>
         <?php the_date('D M d'); ?>
         (<?php the_time(); ?>)

        
        
          <div class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->
        
          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
</div>

<?php get_footer(); ?>