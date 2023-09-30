<?php

include('connDesibarber.php');
if ($_SERVER["REQUEST_METHOD"] == "POST")
//if(!empty($POST['confirm']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT * FROM customer WHERE email= '$email' and password='$password'";
	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);
	if($count==1)
	{
		header("Location:Home.php");
	}
	else
	{
		echo '<script>
				window.location.href= "CustomerLogin.php";
				alert("LOGIN FAILED!!!")
		</script>';
	}
	
	
}
		
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CustomerLogincss.css">
  <title>Customer Sign In</title>
</head>
<body>
  <div class="container glass">
  	<div class = "wrapper">
    <form method="POST" class="sign-in-form">
      <h1>Customer Sign In</h1>
      <h4>Happy to see You Here ;)</h4>	
      <div class="input-group">
        <label for="Email ID">Email ID:</label>
        <input type="email" id="EmailID" name="email" placeholder="Enter Your Email" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>
      </div>
      <button class="button" name="confirm">Confirm</button>
      <h5><font color="#FFFFFF">Don't have account! <a href="CustomerSignup.php">Sign Up</a> pe jao</font></h5> 
    </form>
    </div>
  </div>
</body>
</html>