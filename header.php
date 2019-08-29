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
      
<div class="navigation-wrap bg-light start-header start-style">
    
      <div class="container-fluid border-bottom">
        <div class="text-right">
            
                <ul class="list-inline d-inline-flex align-middle">
                  <li class="list-inline-item">+39 06.808.080</li>
                  <li class="list-inline-item"><button class="btn btn-primary">Richiedi Demo</button></li>
                  <li class="list-inline-item"><button class="btn btn-danger">Assistenza</button></li>
                </ul>
            
              <ul class="list-inline d-inline-flex align-middle">
                  <li class="list-inline-item">FB <span class="pe-7s-angle-down"></span></li>
                  
              </ul>
            
        </div>
    </div>
    
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
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav ml-auto py-4 py-md-0 mt-2 mt-lg-0 mr-lg-4 %2$s">%3$s</ul>',
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