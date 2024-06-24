<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="login.css">		
</head>

<body>
	<div id="container" class="container">
		<div class="row">
			<!-- Register -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
					<form method="post" action="#">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Create Username"  pattern="[A-Za-z\s]+" title="letters only" name="username" required="" maxlength="50"/>
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="date" placeholder="Enter Date Of Birth" name="dob" max="<?php echo date("Y-m-d", strtotime("-6570 day"));?>" required/>
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="text" placeholder="Enter Phone number" name="phone" required="" pattern="[0-9]+" minlength="10" maxlength="10" title="accepts only numeric values with 10 digit."/>

						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required maxlength="50"/>
						</div>
						<select name="question" required="" maxlength="50" style="width: 100%;padding: 0.5rem ;font-size: 1rem;background-color: var(--gray);border-radius: 0.3rem;border: 0.125rem solid var(--white);outline: none;">
							<option value="">Select Security Question</option>
							<option value="1">Whats Your Favourite food?</option>
							<option value="2">Whats Your Favourite City?</option>
							<option value="3">Where did you meet your Spouce</option>
							<option value="4">Whats Your pets name</option>
							</select>
						
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="text" placeholder="Enter answer" name="answer" pattern="[A-Za-z0-9\s]+" required maxlength="50"/>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Create your Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required maxlength="50"/>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Confirm password" name="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required maxlength="50"/>
						</div>
						<button type="submit" name="register">
							Register
						</button>
						</form>
						<?php
if(isset($_POST['register']))
{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];

	$sql = "select * from user where email='$email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);
	
	if($count>0)
	{
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='index.php'; </script>";
	}
	else
	{
		$username=$_POST['username'];
		$dob=$_POST['dob'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		if($password==$cpassword)
		{
		$query= "INSERT INTO `user`(`username`, `dob`, `phone`, `email`, `password`, `question`, `answer`) VALUES  ('".$username."','".$dob."','".$phone."','".$email."','".$password."','".$question."','".$answer."')";
           
        mysqli_query($con,$query) or die(mysqli_error($con));
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='index.php'; </script>";
		}
		else
		{
			echo "<script>
				alert('Passwords dont match');
			</script>";
			echo "<script> location.href='index.php'; </script>";
		}
	}
}
?>
						<p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign In here
							</b>
						</p>
					</div>
				</div>
			</div>
			<!-- End Register -->
			<!-- Sign In -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
					<form method="post" action="#">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="email" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required maxlength="50" />
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" placeholder="Enter Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required maxlength="50" />
						</div>
						<button type="submit" name="login">
							Sign In
						</button>
						</form>
						<?php
if(isset($_POST['login']))
{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql = "select * from user where email='$email' and password='$password'";
	$result = mysqli_query($con,$sql);
	$count =mysqlI_num_rows($result);

	if($count>0)
	{
		$_SESSION['user']=$email;
		echo "<script>
				alert('Login Successful');
			</script>";
		echo "<script> location.href='home.php'; </script>";
	}
	else
	{
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
			echo "<script> location.href='index.php'; </script>";
	}
}
?>
						<a href="forgot.php"><p>
							<b>
								Forgot password?
							</b>
						</p></a>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Register here
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
				</div>
			</div>
		</div>
		<!-- End Sign In -->
		<div class="row content-row">
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Covid-Shield
					</h2>
				</div>
				<div class="img sign-in">
				</div>
			</div>
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
				</div>
				<div class="text sign-up">
					<h2>
						Covid-Shield
					</h2>
				</div>
			</div>
		</div>
	</div>
	
 <script type="text/javascript">	
 let container = document.getElementById("container");
 toggle = () => {
   container.classList.toggle("sign-in");
   container.classList.toggle("sign-up");
 };
 setTimeout(() => {
   container.classList.add("sign-in");
 }, 200);
</script>

</body>
</html>