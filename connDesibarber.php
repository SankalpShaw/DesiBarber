<?php

	

	$conn = mysqli_connect('localhost','root','','desi_barber');
	
	if(!$conn)
	{
		/*echo "Hurreyyy! Succesfully Entered";
	}
	else
	{*/
		die("Error aya Bhaiyaaa!". mysqli_connect_error());
	}
	


?>