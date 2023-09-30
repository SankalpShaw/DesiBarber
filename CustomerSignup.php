<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CustomerSignupCSS.css">
	<title>Customer Sign Up</title>
</head>

<body>
	<div class="container">

				<div class="wrapper">
			<form method="POST">

				<h1>Customer Sign Up</h1>
				<!-- <h4>Thank you! for choosing DESI BARBER</h4> -->
				<div class="input-group">
					<label for="FirstName">First Name:</label>
					<input type="text" id="customerID" name="firstname" placeholder="Enter First name" required>
				</div>
				<div class="input-group">
					<label for="LastName">Last Name:</label>
					<input type="text" id="customerID" name="lastname" placeholder="Enter Last name" required>
				</div>
				<div class="input-group">
					<label for="Mobile number">Mobile No:</label>
					<input type="text" id="customerID" name="mbno" placeholder="Enter Mobile No" required>
				</div>
				<div class="input-group">
					<label for="Email">Email ID:</label>
					<input type="email" id="customerID" name="emailid" placeholder="Enter Email ID" required>
				</div>
				<div class="input-group">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" placeholder="Create password" required>
				</div>
				<div class="input-group">
					<label for="cpassword">Confirm Password:</label>
					<input type="password" id="cpassword" name="cpassword" placeholder="Re-write password" required>
				</div>
                <div>
                <?php

		include('connDesibarber.php');
		if ($_SERVER["REQUEST_METHOD"] == "POST") {


			$fname = $_POST["firstname"];
			$lname = $_POST["lastname"];
			$mbno = $_POST["mbno"];
			$emailid = $_POST["emailid"];	//making object of the form's input
			$password = $_POST["password"];
			$cpassword = $_POST["cpassword"];

			$emailquery = " SELECT * FROM customer WHERE Email='$emailid' ";
			$query = mysqli_query($conn, $emailquery);
			$emailcount = mysqli_num_rows($query);
			if ($emailcount > 0) {
				echo "<h4>Email already exists!</h4>";
			} else {
				if ($password == $cpassword) {
					$sql = "INSERT INTO customer(First_Name,Last_Name,Phone_number,Email,Password) VALUES ('$fname','$lname','$mbno','$emailid','$password')";
					$result = mysqli_query($conn, $sql);
					if ($result) {
						//echo "<h4>Thank you! for choosing DESI BARBER</h4>";
						header("Location:customerLogin.php");
					} else {
						echo "<h4>bhai check kr</h4>";
					}
				} else {
					echo "<h4>Passwords are not matching!</h4>";
				}
			}



		}
		?>

                </div>
  
				<button class="button">Submit</button>

				<h5>
					<font color="#FFFFFF"> click here to </font><a href="CustomerLogin.php">Login!</a>
				</h5>

			</form>
		</div>



	</div>
</body>

</html>