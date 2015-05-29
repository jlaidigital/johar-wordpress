<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


  <?php // Load our CSS ?>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" /> 

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- <header>
  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
<<<<<<< HEAD
  </div> <!-- /.container -->
<!-- </header> -->

              <!-- Nav -->
      <div class="navFull clearfix">
       

          <div class="navLeft">
          <h1><a href="<?php echo home_url(); ?>" id="logo"><?php bloginfo('name'); ?></a></h1>
             
              <!-- nav left -->  
          </div>

              <!-- Logo -->
  
            
          </div>
              <!-- nav right -->
          <div class="navRight">
          <?php wp_nav_menu(array(
                  'container' => 'nav',
                  'container_id'=> 'nav',
                  'theme_location'=>'primary'
                  )); ?>
          </div>
      </div>
              <!-- nav end -->

              <div class="banner">
                <img class="heroImage" src="<?php bloginfo('template_directory') ?>/img/beansHead.jpg" alt="">
              
              </div>

              <div class="overlay">
                <h1>Johar & Co.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button>See Menu</button>
              </div>



  </div>
</header>

      </div>
    </div>
  </div>
</div>


