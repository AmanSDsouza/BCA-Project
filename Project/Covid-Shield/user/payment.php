<?php session_start();
if(!isset($_SESSION['user']))
{
    echo "<script> location.href='index.php'; </script>";
}
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$type=$_GET['type'];
	$cost=$_GET['cost'];
	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Payment</title>
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
            <div class="col-md-7 col-sm-12 ftco-animate mb-5" >
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Payment</h1>
            </div>
          </div>
        </div>
      </div>
    </section>


    <style type="text/css">
     
.box input[type ="submit"]
{
border:0;
  background: #2f89fc;
  display: block;
  margin: 20px auto;
  border:2px solid lightblue;
  padding: 14px 40px;
  width:200px;
  outline: none;
  color: whitesmoke;
  border-radius:24px;
  transition: 0.25s;
  cursor:pointer;
}
.box input[type ="submit"]:hover
{
  box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
  border: 3px solid #00d7c3;
}
 </style>
    <section>
      <div class="row block-9" style="background-image:url('images/card.gif');" data-stellar-background-ratio="0.5">
        <img src="images/c1.gif" width="600"> 
          <div class="col-md-6 pr-md-5">
             <div>
            
            <form action="#" class="box" method="post">
              <div class="form-group">
                <br>
                <input type="text" class="form-control" placeholder="Card Number" required="" pattern="[0-9]+" minlength="16" maxlength="16" title="numbers only with min/max lenght of 16" maxlength="50" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Card Holder Name" required="" pattern="[A-Za-z\s]+" title="letters only" maxlength="50"required=""/>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cvv" required="" pattern="[0-9]+" title="numbers only" maxlength="4" minlength="3" maxlength="50" />
              </div>
              <div class="form-group">
                <input type="date" class="form-control" placeholder="Date Of Expire" required="" min="<?php echo date("Y-m-d",strtotime("+1 day"));?>"/>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" value="<?php echo $cost; ?>" readonly="">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Pay" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          <?php 
		  if(isset($_POST['submit']))
		  {
			  include("config.php");
			  if($type="test")
			  {
				  $query= "update booktest set payment='paid' where `id`='".$id."'";           
					mysqli_query($con,$query) or die(mysqli_error($con));
					echo "<script>
					alert('Payment Successful');
					</script>";
					echo "<script> location.href='home.php'; </script>";
			  }
			  if($type="bed")
			  {
				  $query= "update bookbed set payment='paid' where `id`='".$id."'";           
					mysqli_query($con,$query) or die(mysqli_error($con));
					echo "<script>
					alert('Payment Successful');
					</script>";
					echo "<script> location.href='home.php'; </script>";
			  }
			  if($type="vaccine")
			  {
				  $query= "update bookvaccine set payment='paid' where `id`='".$id."'";           
					mysqli_query($con,$query) or die(mysqli_error($con));
					echo "<script>
					alert('Payment Successful');
					</script>";
					echo "<script> location.href='home.php'; </script>";
			  }
			  echo "<script>
				alert('Payment Module in Development');
			</script>";
			echo "<script> location.href='not.php'; </script>";
		  }
		  ?>
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