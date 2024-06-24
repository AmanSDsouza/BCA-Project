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
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="home.php">Home</a></span> </p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Send Feedback</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://8217474652">+91-8217474652</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@CovidShield.com">info@CovidSheild.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Whatsapp:</span> <a href='https://wa.me/8217474652' target='_blank'>+91-8217474652</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="#" method="post">
              <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $_SESSION['user']; ?>" readonly="true">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="sub" placeholder="Subject" maxlength="50" required="" />
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" name="msg" class="form-control" placeholder="Message" required="" maxlength="50"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="send" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
			<?php
	 if(isset($_POST['send']))
	 {
		 $sub=$_POST['sub'];
		 $msg=$_POST['msg'];
		 $mail=$_SESSION['user'];
		 include("config.php");
			
			$sql1 = "INSERT INTO `feedback`(`subject`, `message`, `email`) VALUES ('".$sub."','".$msg."','".$mail."')";
			if(mysqli_query($con,$sql1))
			{
			echo "<script>
				alert('Feedback sent');
			</script>";
			echo "<script> location.href='feedback.php'; </script>";
			}
	 }
	 ?>
          </div>
          <div class="col-md-6"><center><img src="images/CovidLogoWhite.png" height="375" width="600"></center></div>
        </div>
      </div>
    </section>

  <?php include('footer.php'); ?>

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