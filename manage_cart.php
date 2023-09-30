<?php

session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['add_to_cart']))					//isset is used to(if there is a click on the satled button)
	{
		if(isset($_SESSION['cart']))					//checking if there is any cart option
		{
			$myitems= array_column($_SESSION['cart'],'Item_Name');		//arry column used to sort the array details in a column
			if(in_array($_POST['Item_Name'],$myitems))	//in array use to search a specific value in array(we use to search duplicate values)
			{
			echo "<script>
					alert('Item Already Added');
					window.location.href='Service.php';
				  </script>";
			}
			else{
			$count=count($_SESSION['cart']);			//count work to count items of the array
			$_SESSION['cart'][$count]=array('Item_Name='=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);	//now putting another item inthe i=array index to print(but it will repat and duplicate the process, to avoid just check above lines)
			echo "<script>
					alert('Item Added');
					window.location.href='Service.php';
			      </script>";
			}
			}
			else								//not having cart option executing else
			{
			$_SESSION['cart'][0]=array('Item_Name='=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1); //making an array to store the ITEMNAME & PRICE in variables like 'Item_name'.
			//print_r($_SESSION['cart']);	
			echo "<script>
					alert('Item Added');
					window.location.href='Service.php';
			      </script>";
		}
	}
	if(isset($_POST['Remove_Item']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($value['Item_Name']==$_POST['Item_Name'])
			{
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']=array_values($_SESSION['cart']);
				echo "<script>
						alert('Item Removed');
						window.location.href='mycart.php'
					  </script>";
			}
		}
	}
	
}

?>

