<!DOCTYPE html>
<html lang="UTF-8">

  <head>
    <?php
    include_once('links/vendors.php');
    ?>
    
  </head>

<body>
  <!-- ***** Header Area Start ***** -->
  <?php
  include_once('links/menu.php')
  ?>
  <!-- ***** Header Area End ***** -->


  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6></h6>
              <h2>Bienvenido al campamento</h2>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="contact-us" id="contact">
   <?php
   include_once('links/pie.php')
   ?>
  </section>

  <?php 
  include_once("links/scrip.php");
  ?>
</body>

</body>
</html>