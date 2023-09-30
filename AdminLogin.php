<?php
		include('connDesibarber.php');
?>	
	


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="AdminLogIncss.css">
  <title>Admin Panel</title>
</head>
<body>
  <div class="container">
    <form class="sign-in-form" method="post">
      <h1>Admin Log In</h1>
      <h4>Let's start sir</h4>	
      <div class="input-group">
        <label for="AdminID">Admin ID</label>
        <input type="text" id="AdminID" name="AdminID" placeholder="Enter ID" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter Password" name="password" required>
      </div>
      <button class="button" name="confirm">Confirm</button><br><br>
    <?php
	  if(isset($_POST['confirm'])){
		$adminid = $_POST['AdminID'];
		$pass = $_POST['password'];
		
		$query = "SELECT * FROM admin WHERE ID = '$adminid' AND Password = '$pass'";
		$result = mysqli_query($conn,$query);
		$total = mysqli_num_rows($result);
		if($total){
			header('location:Home.php');
		}
		else{
			echo "Incorrect ID or Password!";
			
		}
	  }?>
    </form>
  </div>
  

</body>
</html>
