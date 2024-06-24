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

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
      <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="home.php">Home</a></span> <span><a href="services.php">Services</a></span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Recovery plan for the world</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">We serve you the best</h2>
            <p>Modern mankind just a click away</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <a href="https://covid-19livetracker.blogspot.com/" target="_blank"><i class="fas fa-shield-virus" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="https://covid-19livetracker.blogspot.com/" target="_blank"><h3 class="heading">Information About The Covid</h3></a>
                <p> </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                 <a href="test.php"><i class="fas fa-syringe" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="test.php"><h3 class="heading">Covid Test</h3></a>
                <p> </p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <a href="bed.php"><i class="fa fa-bed" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="bed.php"><h3 class="heading">Bed Booking</h3></a>
                <p> </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
               <a href="vaccine.php"><i class="fas fa-capsules" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="vaccine.php"><h3 class="heading">Vaccination</h3></a>
                <p></p>
              </div>
            </div>      
          </div>

          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                 <a href="hplasma.php"><i class=" fas fa-burn" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
               <a href="hplasma.php"><h3 class="heading">Plasma Donation</h3></a>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <a href="not.php"><i class=" fa fa-file" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="not.php"><h3 class="heading">Notification</h3></a>
                <p></p>
              </div>
            </div>    
          </div>
          
      </div>
    </section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-3 aside-stretch py-5">
            <div class=" heading-section heading-section-white ftco-animate pr-md-4">
              <h2 class="mb-3">Achievements</h2>
              <p style="text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3)">Smile caused by satisfaction.</p>
            </div>
          </div>
          <div class="col-md-9 py-5 pl-md-5">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="8">0</strong>
                    <span><mark style=" border-radius: 5px 20px 5px">Approved Hospitals</mark></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="200">0</strong>
                    <span><mark style=" border-radius: 5px 20px 5px">Qualified Doctors</mark></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="2000">0</strong>
                    <span><mark style=" border-radius: 5px 20px 5px">Happy Customers</mark></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="400">0</strong>
                    <span><mark style=" border-radius: 5px 20px 5px">Patients per month</mark></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

   <?php include('footer.php');?>

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