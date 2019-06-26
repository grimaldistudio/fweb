<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>
    
    <div class="container d-lg-none">
        <div class="ml-auto">
            
        </div>
    </div>

<div class="navigation-wrap bg-light start-header start-style">
<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">

    <?php b4st_navbar_brand();?>
      

   	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
	</button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav ml-auto py-4 py-md-0 mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>

     <!-- <?php b4st_navbar_search();?>     -->
    </div>

  </div>
</nav>
</div>
<?php b4st_navbar_after();?>