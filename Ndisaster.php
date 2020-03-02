<?php require('constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welfare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
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
      <a class="navbar-brand" href=<?php echo HOME?>>Welfare</a>
      
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Choose Natural Disaster</h1>
          

          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section">
        <div class="container">
          <div class="row">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = constant('DATABASE_NAME');
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
                $sql="SELECT * from disaster where dis_type=0";
                $result=$conn->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc())
                    {
                      echo "<div class='col-sm-4'><a href='maploc.php?name=".$row["name"]."'><div class='card text-center'><div class='card-body'><img src='images/".$row["d_img"]." ' height='200' width='200' hspace='20'><h5 class='card-title'>".$row['name']."</h5></div></div></a></div>";
                    }
                }
            end1:
          $conn->close();
        ?>
          </div>
        </div>
    </section>

  

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
  <script src="js/main.js"></script>
    
  </body>
</html>