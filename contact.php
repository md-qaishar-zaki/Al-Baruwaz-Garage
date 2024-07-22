<!DOCTYPE html>
<html lang="en">
   
<?php $page = 'contact'; include "header.php" ?>

      <!-- end header -->
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                        
                        <div class="btn-effect">
                     <div class='btn-holder'>
                     <a href="about.php">
                     <button class="btn btn-3 hover-border-4">
                        <span>send Message</span>
                     </button>
                     </a>
                     </div> 
                     </div>
                        

                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.1910192850414!2d51.431293015009615!3d25.1967798838964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45d1e4d90879fd%3A0x2c34fd3422f4b3c!2sAL%20BARUWAZ%20GARAGE%20(BENZ)!5e0!3m2!1sen!2sin!4v1645690825659!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      
      <?php include "footer.php" ?>

   </body>
</html>