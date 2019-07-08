<?php /* Template Name: Home Template */ ?>
<?php
    get_header(); 
    b4st_main_before();
?>

<main id="main" class="container mt-5">
  <div class="row">
      
     <?php putRevSlider('homeslider', 'homepage'); ?>

    <div class="col-sm">
      <div id="content" role="main">
        
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
