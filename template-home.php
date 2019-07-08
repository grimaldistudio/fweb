<?php /* Template Name: Home Template */ ?>
<?php
    get_header(); 
    b4st_main_before();
?>

<main id="main" class="mt-5">
  
      
     <?php putRevSlider('homeslider', 'homepage'); ?>

   
      <div id="content" role="main">
        
          <!-- onclick='revapi1.revshowslide(2);' -->
        
          <div class="container"><!-- slider navigation and intro -->
              <div class="row">
                <div class="col-md-12">

                </div>
              </div>
          </div>
          
          
           <?php get_template_part('loops/page-content'); ?>
                      
    </div>


</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
