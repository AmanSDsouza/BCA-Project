<!DOCTYPE html>
<html>
<head>
	<title>CovidShield</title>
	<link rel="stylesheet" href="login.css">	
</head>

<body>
	<div id="container" class="container">
		<div class="row">
			<!-- Sign Up -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					
				</div>
			</div>
			<!-- End Sign Up -->
			<!-- Reset Password -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
					<form method="post" action="#">
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="email" placeholder="Enter Your email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required maxlength="50" />
						</div>
						
							<select name="question" required=""  style="width: 100%;padding: 1rem 3rem;font-size: 1rem;background-color: var(--gray);border-radius: 0.5rem;border: 0.125rem solid var(--white);outline: none;">
							<option value="">Select Security Question</option>
							<option value="1">whats Your Favourite food?</option>
							<option value="2">Whats Your Favourite City?</option>
							<option value="3">Where did you meet your Spouce</option>
							<option value="4">Whats Your pets name</option>
							</select>

						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="text" placeholder="Enter answer" name="answer" pattern="[A-Za-z0-9\s]+" required="" maxlength="50"/>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Enter New Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  maxlength="50"/>
						</div>
						<button type="submit" name="submit">
							Reset
						</button>
					</form>
					</div>
					<?php
if(isset($_POST['submit']))
{
	include('config.php');
	$email=$_POST['email'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	$password=$_POST['password'];
	
	$sql="update user set password='".$password."' where email='".$email."' and question='".$question."' and answer='".$answer."'";
	mysqli_query($con, $sql);
	$count=mysqli_affected_rows($con);
	echo $count;
	if($count>0)
	{
	echo "<script>
				alert('Password has been reset');
				</script>";
	echo "<script> location.href='index.php'; </script>";
	}
	else
	{
		echo "<script>
				alert('invalid information');
				</script>";
				echo "<script> location.href='index.php'; </script>";
	}
}	
?>
</div>
				</div>
				<div class="form-wrapper">
				</div>
			</div>
		</div>
			<!-- End Reset Password -->
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