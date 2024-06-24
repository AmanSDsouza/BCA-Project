<!DOCTYPE html>
<html>
<head>
	<title>reset</title>
</head>
<style type="text/css">
	
*,
::after,
::before {
  box-sizing: border-box;
}

body {
  background-color: #212121;
  color: #fff;
  font-family: monospace, serif;
  letter-spacing: 0.05em;
}

h1 {
  font-size: 23px;
}

.form {
  width: 300px;
  padding: 64px 15px 24px;
  margin: 0 auto;
}
.form .control {
  margin: 0 0 24px;
}
.form .control input,select {
  width: 100%;
  padding: 14px 16px;
  border: 0;
  background: transparent;
  color: #fff;
  font-family: monospace, serif;
  letter-spacing: 0.05em;
  font-size: 12px;
}
.form .control input:hover, .form .control input:focus {
  outline: none;
  border: 0;
}
.form .btn {
  width: 100%;
  display: block;
  padding: 14px 16px;
  background: transparent;
  outline: none;
  border: 0;
  color: #fff;
  letter-spacing: 0.1em;
  font-weight: bold;
  font-family: monospace;
  font-size: 16px;
}

.block-cube {
  position: relative;
}
.block-cube .bg-top {
  position: absolute;
  height: 10px;
  background: #020024;
  background: linear-gradient(90deg, #020024 0%, #340979 37%, #00d4ff 94%);
  bottom: 100%;
  left: 5px;
  right: -5px;
  transform: skew(-45deg, 0);
  margin: 0;
}
.block-cube .bg-top .bg-inner {
  bottom: 0;
}
.block-cube .bg {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: #020024;
  background: linear-gradient(90deg, #020024 0%, #340979 37%, #00d4ff 94%);
}
.block-cube .bg-right {
  position: absolute;
  background: #020024;
  background: #00d4ff;
  top: -5px;
  z-index: 0;
  bottom: 5px;
  width: 10px;
  left: 100%;
  transform: skew(0, -45deg);
}
.block-cube .bg-right .bg-inner {
  left: 0;
}
.block-cube .bg .bg-inner {
  transition: all 0.2s ease-in-out;
}
.block-cube .bg-inner {
  background: #212121;
  position: absolute;
  left: 2px;
  top: 2px;
  right: 2px;
  bottom: 2px;
}
.block-cube .text,select {
  position: relative;
  z-index: 2;
}
.block-cube.block-input input {
  position: relative;
  z-index: 2;
}
.block-cube.block-input input:focus ~ .bg-right .bg-inner, .block-cube.block-input input:focus ~ .bg-top .bg-inner, .block-cube.block-input input:focus ~ .bg-inner .bg-inner {
  top: 100%;
  background: rgba(255, 255, 255, 0.5);
}
.block-cube.block-input .bg-top,
.block-cube.block-input .bg-right,
.block-cube.block-input .bg {
  background: rgba(255, 255, 255, 0.5);
  transition: background 0.2s ease-in-out;
}
.block-cube.block-input .bg-right .bg-inner,
.block-cube.block-input .bg-top .bg-inner {
  transition: all 0.2s ease-in-out;
}
.block-cube.block-input:focus .bg-top,
.block-cube.block-input:focus .bg-right,
.block-cube.block-input:focus .bg, .block-cube.block-input:hover .bg-top,
.block-cube.block-input:hover .bg-right,
.block-cube.block-input:hover .bg {
  background: rgba(255, 255, 255, 0.8);
}
.block-cube.block-cube-hover:focus .bg .bg-inner, .block-cube.block-cube-hover:hover .bg .bg-inner {
  top: 100%;
}

.credits {
  position: fixed;
  left: 0;
  bottom: 0;
  padding: 15px 15px;
  width: 100%;
  z-index: 111;
}
.credits a {
  opacity: 0.6;
  color: #fff;
  font-size: 11px;
  text-decoration: none;
}
.credits a:hover {
  opacity: 1;
}
.form input[type="submit"]
{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  border:2px solid lightblue;
  padding: 14px 40px;
  width:200px;
  outline: none;
  color: white;
  border-radius:24px;
  transition: 0.25s;
  cursor:pointer;

}
.form input[type="submit"]:hover
{
  box-shadow: 0 0 10px 0 #00d7c3 inset, 0 0 20px 2px #00d7c3;
  border: 3px solid #00d7c3;

}

</style>
<body>
	<form method="post" action="#" class='form'>
  <div class='control'>
    <h1>
     Reset
    </h1>
  </div>
  <div class='control block-cube block-input'>
    <input name="email" placeholder='Hospital Email' type='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required maxlength="50"/>
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
  </div>
  <div class='control block-cube block-input'>
  <select name="question"  style="border:transparent;" required="">
              <option value="" style="color: black">Select Security Question</option>
              <option value="1" style="color: black">whats Your Favourite food?</option>
              <option value="2" style="color: black">Whats Your Favourite City?</option>
              <option value="3" style="color:black">Where did you meet your Spouce</option>
              <option value="4" style="color:black">Whats Your pets name</option>
              </select>
              <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
</div>
  <div class='control block-cube block-input'>
    <input name="answer" placeholder='Enter Answer' type='text' pattern="[A-Za-z]+" title="letters only"  required="" maxlength="50"/>
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
  </div>


  <div class='control block-cube block-input'>
    <input name="password" placeholder='Enter New Password' type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required maxlength="50"/>
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
  </div>
 <input  type="submit" value="Reset" name="submit">
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
 
</form>
<?php
if(isset($_POST['submit']))
{
  include('config.php');
  $email=$_POST['email'];
  $question=$_POST['question'];
  $answer=$_POST['answer'];
  $password=$_POST['password'];
  
  $sql="update hospital set password='".$password."' where email='".$email."' and question='".$question."' and answer='".$answer."'";
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


</body>
</html>