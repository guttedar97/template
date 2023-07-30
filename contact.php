<?php
   include'header.php';
?>
      <!-- contact section start -->
      <div class="shop_section_start layout_padding">
         <div class="container">
            <h1 class="contact_center_text">CONTACT <span style="color: #e9bbeb;">US</span></h1>
         </div>
      </div>
      <div class="contact_section layout_padding">
         <div class="contact_bg">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="form_main">
                        <h1 class="contact_text">Contact Us</h1>
                        <input type="text" class="from_text" placeholder="From" name="From">
                        <input type="text" class="map_text" placeholder="Map" name="Map">
                     </div>
                  </div>
                  <div class="col-sm-8">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="560" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <?php
      include'footer.php';
      ?>
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright">2023 All Rights Reserved. <a href="https://html.design">Free html  Templates</a> Distributed by <a href="https://themewagon.com">ThemeWagon</p>
         </div>
      </div>
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