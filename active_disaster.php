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
      <a class="navbar-brand" href=<?php echo HOME;?>>Welfare</a>
      
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <?php
		$servername = "localhost:3306";
		$username = "root";
		$password = "";
		$dbname = constant('DATABASE_NAME');

		$fg=$_GET["flag"];
		$chg=$_GET["change"];

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		if($chg==0 && $fg==0){
			//echo "DISPLAY";
		}
    else if ($chg==0 && $fg<3) {
      echo "Your request is getting verified..<br><br>";
    }
		else{
			if($chg==1){
			echo "Your request is inserted to our database...<br><br>";
			}
			elseif ($chg==0) {
				if ($fg>=3) {
          $disaster_name=$_GET['disaster'];
					echo "Mails are forwarded to NGO's <br><br>";
          require_once "Mail.php";
          $from = "Jay";
          $to = "jaythadeshwar007@gmail.com";
          $host = "ssl://smtp.gmail.com";
          $port = "465";
          $username = "jaythadeshwar1@gmail.com";
          $password = "2j8a9y96838Jay";
          $subject = $disaster_name." has occured";
          $body = "People need your help. Make up the team and take a step towards good cause.";
          $headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
          $smtp = Mail::factory('smtp',
          array ('host' => $host,
          'port' => $port,
          'auth' => true,
          'username' => $username,
          'password' => $password));
          $mail = $smtp->send($to, $headers, $body);
          if (PEAR::isError($mail)) {
          echo($mail->getMessage());
          } else {
          echo("Message successfully sent!\n");
          }

				}
			}	
		}
		echo "LIVE DISASTERS<br><br>";

		$sql = "SELECT * FROM `disaster_event` WHERE `flag` >= 3";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo  $row["dis_name"]. " in " . $row["city"]. "<br>";
		    }
		} else {
		    //echo "\r\n0 results";
		}
		$conn->close();
	?>
        	</h1>
          
 

          </div>
        </div>
      </div>
    </div>
    

   

    <section class="ftco-section">
    	<div class="container">
    
          
        </div>
    	</div>

    </section>
    

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>I cannot get any sense of an enemy - only of a disaster </p><p>I always tried to turn every disaster into an opportunity.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
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
          <div class="col-md-3">
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
