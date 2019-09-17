<?php b4st_footer_before();?>

<footer id="footer" class="bg-light">

  <div class="container">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

  </div>

</footer>

<?php //b4st_footer_after();?>

<?php //b4st_bottomline();?>

<?php wp_footer(); ?>

<div class="bg-black">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="/wp-content/uploads/2019/09/flottaweb-w-logo.png" width="80" />
            <span class="text-sm">Flottaweb ® è un marchio di Sistemisoft Srl. P.IVA: 02488760600. © <?php date ("Y"); ?> All Rights Reserved. </span>
            Terms of Use and Privacy Policy
        </div>
      
          <div class="col-md-4">
             <span class="">Seguici anche su</span>
                <ul class="list-inline social-links">
                    <li class="list-inline-item"><a href="https://www.facebook.com/flottaweb/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/flottaweb" target="_blank"><i class="fab fa-twitter"></i></a></li>   
                    <li class="list-inline-item"><a href="https://www.linkedin.com/company/flottaweb"><i class="fab fa-linkedin-in"></i></a></li>    
                    <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCrIfQzcQS-a69jtL4TD0tJw "><i class="fab fa-youtube"></i></a></li>   

                </ul>
        </div>
        
    </div>
</div>
</div>

</body>
</html>
