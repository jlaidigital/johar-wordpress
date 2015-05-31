<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">

<div class="brownSection" style="background-image: url('<?php the_field('hero_image') ?>');">
        <div class="companyInfo">
            <h2><?php the_field('hero_overlay') ?></h2>
<!--     <img class="heroImage" src="<?php bloginfo('template_directory') ?>/img/beansHead.jpg" alt="">
 -->     </div> 
 </div>

  <div class="container">

    <div class="content">

<!--     1st Div -->
		<div class="quarter" style="background-image: url('<?php the_field('index_image') ?>');">
        	<div class="beansTitle">
            	<h3><?php the_field('index_image') ?></h3>
<!--     <img class="indexImage" src="<?php bloginfo('template_directory') ?>/img/beansHead.jpg" alt="">
 -->     	</div> 
 			
		
			<!-- <h3 class="beansTitle">Malapascua</h3> -->
			<p>Lorem ipsum dolor sit amet.</p>
			<button class="beansButton">See Menu</button>
		</div>
<!--     2nd Div -->		
		<div class="quarter">
			<h3 class="beansTitle">Malapascua</h3>
			<img src="" alt="">
			<p>Lorem ipsum dolor sit amet.</p>
			<button class="beansButton">See Menu</button>
		</div>
<!--     3rd Div -->		
		<div class="quarter">
			<h3 class="beansTitle">Malapascua</h3>
			<img src="" alt="">
			<p>Lorem ipsum dolor sit amet.</p>
			<button class="beansButton">See Menu</button>
		</div>
<!--     4th Div -->		
		<div class="quarter">
			<h3 class="beansTitle">Malapascua</h3>
			<img src="" alt="">
			<p>Lorem ipsum dolor sit amet.</p>
			<button class="beansButton">See Menu</button>
		</div>

    </div> <!--/.content -->
	
<!-- 	middle giant pictures-->    
	<div class="twins">
    	<div class="leftTwin">
     		<img src="<?php bloginfo('template_directory') ?>/img/coffee_by_bed.jpg" alt="">
    	</div>
<!-- right twin start-->    	
 		<div class="rightTwin">
     		<img src="<?php bloginfo('template_directory') ?>/img/Unsplash-Coffee-Cup.jpg" alt="">
    	</div>
    </div>

<!--    Special menu -->
		<div class="specialMenu">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolorem!</p>
		</div>

		    <?php get_template_part( 'loop', 'index' ); ?>

		<?php get_sidebar(); ?>

    	


    <?php //get_sidebar(); ?>
    <?php //get_template_part( 'loop', 'index' );	?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>