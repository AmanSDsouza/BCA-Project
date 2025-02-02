<?php session_start();
if(!isset($_SESSION['user']))
{
    echo "<script> location.href='index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CovidShield</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

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
    
	 <?php include('nav.php'); ?>

    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/kiii.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5" >
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Hospital List</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    
	<section class="ftco-section">
      <div class="container">
		<div class="row">
       <?php
								include 'config.php';
								$sql1 = "select hospital.hname, hospital.address, hospital.city, hospital.phone, test.cost, test.time, hospital.email, hospital.image from hospital inner join test on test.hemail=hospital.email";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								
								$name=$row1[0];
								$address=$row1[1];
								$city=$row1[2];
								$phone=$row1[3];
								$cost=$row1[4];
								$time=$row1[5];
								$hemail=$row1[6];
								$image=$row1[7];
								
								?>

        
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
              <div class="img mb-4" style="background-image: url(../Hospital/uploads/<?php echo $image; ?>);"></div>
              <div class="info text-center">
                 <h3><?php echo $name; ?></h3>
                <div class="text">
                  <p>Address: <?php echo $address; echo ', '; echo $city; ?></p>
                  <p>Phone: <?php echo $phone; ?></p>
                  <p>Cost for the test: <?php echo $cost; ?></p>
                  <p>Duration of the test: <?php echo $time; ?></p>
                 
             <a href="ctest.php?hid=<?php echo $hemail; ?>" class="py-2 d-block">Test Now</a>
               </div>
              </div>
            </div>
          </div>
								<?php }}?>
        </div>
        
      </div>
    </section>
    

   <?php include('footer.php'); ?>
    
  

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