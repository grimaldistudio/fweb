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
        
          <div data-liindex="0" data-liref="rs-1" class="tp-tab selected" style="width: 100px; height: 50px; left: 0px; top: 0px;" onclick='revapi1.revshowslide(2);'><div class="tp-tab-content">  <span class="tp-tab-date"></span>  <span class="tp-tab-title">UNO</span></div><div class="tp-tab-image" style="background-image: url(&quot;&quot;);"></div></div>
          
        
          
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php 
    b4st_main_after();
    get_footer(); 
?>
