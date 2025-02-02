<?php session_start(); 
if(!isset($_SESSION['admin']))
{
    echo "<script> location.href='index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
 <title>Admin</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <?php include('list.php'); ?>


<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
   
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
    <a href="logout.php"><li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </a></ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">


      
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Plasma Donator</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
    <th>DOB</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>State</th>
    <th>Address</th>
    <th>Blood Group</th>
    <th>Lab Test</th>
    <th>Symptoms</th>
    <th>Negative Report</th>
    <th>Date Of Last Symptoms</th>
    <th>Status</th>
    <th>Appointment</th>
    <th>Hospital Email</th>
                    </tr>
                  </thead>
				  <?php
	include("config.php");
	$sql4 = "select * from donate";
	$result4 = mysqli_query($con,$sql4);
	$count4 =mysqlI_num_rows($result4);

	if($count4>0)
	{
		while($row4 = mysqli_fetch_array($result4))
		{ 
			$id=$row4[0];
			$name=$row4[1];
			$dob=$row4[2];
			$age=$row4[3];
			$gender=$row4[4];
			$phone=$row4[5];
			$state=$row4[6];
			$address=$row4[7];
			$blood=$row4[8];
			$test=$row4[9];
			$symp=$row4[10];
			$rep=$row4[11];
			$last=$row4[12];
			$email=$row4[13];
			$hemail=$row4[14];
			$status=$row4[15];
			$appdate=$row4[16];
			?>
                   <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $dob; ?></td>
    <td><?php echo $age; ?></td>
    <td><?php echo $gender; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $phone; ?></td>
    <td><?php echo $state; ?></td>
    <td><?php echo $address; ?></td>
    <td><?php echo $blood; ?></td>
    <td><?php echo $test; ?></td>
    <td><?php echo $symp; ?></td>
    <td><?php echo $rep; ?></td>
    <td><?php echo $last; ?></td>
    <td><?php echo $status; ?></td>
    <td><?php echo $appdate; ?></td>
    <td><?php echo $hemail; ?></td>
    
   </tr>
	<?php }}?>
    
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
	  
	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
