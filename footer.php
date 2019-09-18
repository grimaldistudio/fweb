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

<div class="bg-black pb-4 pt-4">
<div class="container text-white">
    
    <div class="row pt-3 b-t-muted">
        <div class="col-md-4">
            <img src="/wp-content/uploads/2019/09/flottaweb-w-logo.png" width="40" />
            <div class="mt-1 l-h-xs">
                <span class="text-xs text-muted">Flottaweb ® è un marchio di Sistemisoft Srl </span>
                <span class="text-xs text-muted d-block">P.IVA: 02488760600 © <?php echo date ("Y"); ?> All Rights Reserved.</span>           
            </div>
        </div>
      
          <div class="col-md-5">
             <span class="text-sm">Seguici anche su</span>
             <ul class="list-inline  mt-3">
                 <li class="list-inline-item text-sm"><a href="https://www.facebook.com/flottaweb" class="text-muted" target="_blank">Facebook</a></li>
                 <li class="list-inline-item text-sm"><a href="https://twitter.com/flottaweb" class="text-muted" target="_blank">Twitter</a></li>
                 <li class="list-inline-item text-sm"><a href="https://www.linkedin.com/company/flottaweb" class="text-muted" target="_blank">Linkedin</a></li>
                 <li class="list-inline-item text-sm"><a href="https://www.youtube.com/channel/UCrIfQzcQS-a69jtL4TD0tJw" class="text-muted" target="_blank">YouTube</a></li>
             </ul>
             <!--
                <ul class="list-inline social-links mt-3">
                    <li class="list-inline-item"><a href="https://www.facebook.com/flottaweb/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/flottaweb" target="_blank"><i class="fab fa-twitter"></i></a></li>   
                    <li class="list-inline-item"><a href="https://www.linkedin.com/company/flottaweb"><i class="fab fa-linkedin-in"></i></a></li>    
                    <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCrIfQzcQS-a69jtL4TD0tJw "><i class="fab fa-youtube"></i></a></li>   
                </ul>
             -->
        </div>
        
        <div class="col-md-3 text-right">
            <ul class="list-inline  mt-4">
                <li class="list-inline-item"><a class="text-muted text-sm" href="#">Termini e Condizioni</a></li>
                <li class="list-inline-item"><a class="text-muted text-sm" href="#">Privacy Policy</a></li>
            </ul>
        </div>
        
    </div>
</div>
</div>

</body>
</html>
