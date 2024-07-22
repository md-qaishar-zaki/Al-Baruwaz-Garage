<!DOCTYPE html>
<html lang="en">

   <?php $page = 'home'; include "header.php" ?>

      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner.jpg" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner3.jpg" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="book_room">
                        
                        <form class="book_now">
                           <div class="row">
                              <div class="col-md-12">
                                 <marquee style="color:#fff; font-width:700; font-size:26px;">"WE VALUE YOUR CARS"</marquee>
                              </div> 
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>Al Baruwaz Garage we offer a comprehensive range of professional, efficient and great-value products and services for all your automotive needs.
                        We pride ourselves on being at the cutting edge of automotive technology and are committed to meeting our customers’ needs.</p>
                     
                     
                     <div class="btn-effect">
                     <div class='btn-holder'>
                     <a href="about.php">
                     <button class="btn btn-3 hover-border-4">
                        <span>Read More</span>
                     </button>
                     </a>
                     </div> 
                     </div>

                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/about1.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- blog -->
      <div  class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our services</h2>
                     <p>Try us once, you’ll never go anywhere again.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/Suspension Repair.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Suspension Repairs</h3>
                        <p>A car’s suspension system is essential for keeping you safe on the roads and for the longer run of your car.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/vehicle diagnostics.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Vehicle Diagnostics</h3>
                        
                        <p>Most modern cars are fitted with between 40 to 80 Electronic Control Units that monitor...</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="blog_box">
                     <div class="blog_img">
                        <figure><img src="images/Minor and major service.jpg" alt="#"/></figure>
                     </div>
                     <div class="blog_room">
                        <h3>Minor And Major Service</h3>
                        
                        <p>We carry out servicing for all types of motor vehicles as per the manufacturers...</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end blog -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <!-- <h2>SERVICE</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p> -->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/bike.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bike Repair</h3>
                        <p>A bike mechanic who can perform a wide range of repairs on Bicycle & Mechanics can be employed in various types of stores, ranging from large department stores to small local bike shops.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/car.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Car Repair</h3>
                        <p>Consumables accumulate dust and some parts like rubber or plastic may wear off due to sheer use. Regular maintenance will ensure that the consumables and other parts are repaired or replaced as soon as their lifespan is over. The overall result is increased performance and fuel economy.</p>
                     </div>
                  </div>
               </div>
               
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/auto.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Auto Electrical Mechanical</h3>
                        <p>Automotive Electricians are qualified to install new electrical parts or repair and maintain electrical wiring and components in motor vehicles.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/oil.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Oil Change & Spare Parts</h3>
                        <p>An oil change will help protect the internal parts of the engine from premature wear. Ensure you use the recommended oil grade for your vehicle.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/brake.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Brake Repair</h3>
                        <p>At Sun Auto Service, we're here to help with all your brake repair and ... will ask questions and ask that you describe any braking concerns you have.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->
      <!-- gallery -->
      <div  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>gallery</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery1.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery2.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery3.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery4.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery5.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery6.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery7.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery8.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
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
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.1910192850414!2d51.431293015009615!3d25.1967798838964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45d1e4d90879fd%3A0x2c34fd3422f4b3c!2sAL%20BARUWAZ%20GARAGE%20(BENZ)!5e0!3m2!1sen!2sin!4v1645690825659!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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