<?php /* Template Name: Home Template */ ?>
<?php
    get_header(); 
    b4st_main_before();
?>

<main id="main" class="mt-5">
  
      
     <?php putRevSlider('homeslider', 'homepage'); ?>

   
      <div id="content" role="main">
                 
          
           <div class="container">
           <?php get_template_part('loops/page-content'); ?>
           </div>           
    </div>


</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
