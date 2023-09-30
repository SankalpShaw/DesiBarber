<?php
//$conn = new PDO('mysql:host=localhost;dbname=Desi_Barber', 'root', '');
$conn = mysqli_connect('localhost','root','','desi_barber');
	
	if(!$conn)
	{
		die("Error aya Bhaiyaaa!". mysqli_connect_error());
	}
	else
	{
		

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 1..			
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$message = $_POST['message']; 
		
		$sql="INSERT INTO `contact` (`name`, `email`, `phone`, `address`, `message`) VALUES ('$name','$email','$phone','$address','$message')";
		$request=mysqli_query($conn,$sql);
		echo "Thank you for your Feedback :) ";
	
	}
	}		
	
?>	
