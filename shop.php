<?php
   include'header.php';
?>
      <!-- shop section start -->
      <div class="shop_section_start layout_padding">
         <div class="container">
            <h1 class="center_text">OUR <span style="color: #e9bbeb;">SHOP</span></h1>
         </div>
      </div>
      <div class="container-fluid">
         <div class="about_padding">
            <div class="shop_section layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="shop_img"><img src="images/img-7.png"></div>
                  </div>
                  <div class="col-md-6">
                     <div class="shop_taital">
                        <h1 class="shop_text">Our Shop</h1>
                        <p class="ipsum_text">irst true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore alw</p>
                        <p class="ipsum_text">irst true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore alw</p>
                        <div class="red_more_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <!-- shop section end -->  
    <?php
      include'footer.php';
   ?>
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright">2023 All Rights Reserved. <a href="https://html.design">Free html  Templates</a> Distributed by <a href="https://themewagon.com">ThemeWagon</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>
   </body>
</html>