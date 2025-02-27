<?php require('constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welfare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Welfare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href=<?php echo HOME; ?> class="nav-link">Home</a></li>
          <li class="nav-item"><a href=<?php echo JOIN_US; ?> class="nav-link">Join Us</a></li>
          <li class="nav-item"><a href=<?php echo DONATE; ?> class="nav-link">Donate</a></li>
          <li class="nav-item"><a href=<?php echo EVENT; ?> class="nav-link">Events</a></li>
          <li class="nav-item"><a href=<?php echo GALLERY; ?> class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href=<?php echo FAQ; ?> class="nav-link">FAQ's</a></li>
          <li class="nav-item"><a href=<?php echo CONTACT; ?> class="nav-link">Contact Us</a></li>
          <li class="nav-item"><a href=<?php echo LIVECHAT; ?> class="nav-link">Live Chat</a></li>
          <li class="nav-item"><a href=<?php echo NGO_LOGIN; ?> class="nav-link">NGO Login</a></li>
          <li class="nav-item"><a href=<?php echo ABOUT_DISASTER; ?> class="nav-link">Disasters</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is Not An Option of Our Life</h1>
          

            <form action=<?php echo DISASTER_TYPE;?>>
              <button class="btn btn-white btn-outline-white">REGISTER DISASTER</button>  
            </form>
          </div>
        </div>
      </div>
    </div>

   

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Make Donation</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Become A Volunteer</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Sponsorship</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>
		
		

   <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-1">
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>I cannot get any sense of an enemy - only of a disaster </p><p>I always tried to turn every disaster into an opportunity.</p>
            </div>
          </div>
          <div class="col-md-3 offset-md-1">
             <div class="ftco-footer-widget mb-1 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
              <li><a href=<?php echo HOME;?> class="py-2 d-block">Home</a></li>
                <li><a href=<?php echo JOIN_US;?> class="py-2 d-block">Join Us</a></li>
                <li><a href=<?php echo DONATE;?> class="py-2 d-block">Donate</a></li>
                <li><a href=<?php echo EVENT;?> class="py-2 d-block">Event</a></li>
                <li><a href=<?php echo CONTACT;?> class="py-2 d-block">Contact Us</a></li>
                <li><a href=<?php echo LIVECHAT;?> class="py-2 d-block">Live Chat</a></li>  
              </ul>
            </div>
          </div>
          <div class="col-md-3 offset-1">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Shri Bhagubhai Mafatlal Polytechnic
Irla, N. R. G Marg,
Opposite Cooper Hospital,
Vileparle (W),
Mumbai 400056
India</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">022-42336000 (Office)<br>
022-42336022 (Direct)</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

           <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Welfare</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>