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
  include_once('links/menu2.php')
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
              <h6>Hola</h6>
              <h2>Bienvenido al informe de campamentos</h2>
              <h6>San Rafael Ixtapalucan, Tlahuapan, Puebla</h6>
                
            </div>
          </div>
      </div>
  </section>
             <section>
             <div class="col-lg-6">
            <div class="card shadow-base card-body pd-25 bd-0">
              <div class="row">
                <div class="col-sm-6">
                  <h6 class="card-title tx-uppercase tx-12"></h6>
                  <p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato">25%</p>
                  <div class="progress mg-b-10">
                    <div class="progress-bar bg-primary progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Gracias por registrarte en nuestro campamento.</p>
                  <p class="tx-11 lh-3 mg-b-0">Estamos por completar nuestro grupo, día de inicio el 25/08/2022.
                </div><!-- col-6 -->
                <div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-center justify-content-center">
                  <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#0866C6&quot;, &quot;#E9ECEF&quot;],  &quot;innerRadius&quot;: 60, &quot;radius&quot;: 90 }" style="display: none;">30/100</span><svg class="peity" height="180" width="180"><path d="M 90 0 A 90 90 0 0 1 175.59508646656383 117.81152949374527 L 147.06339097770922 108.54101966249684 A 60 60 0 0 0 90 30" fill="#0866C6"></path><path d="M 175.59508646656383 117.81152949374527 A 90 90 0 1 1 89.99999999999999 0 L 89.99999999999999 30 A 60 60 0 1 0 147.06339097770922 108.54101966249684" fill="#E9ECEF"></path></svg>
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
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