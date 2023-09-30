<?php 															//	NEED TO SOLVE TO SHOW 'Item_Name' IN THE TABLE.......
include("header.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>My Cart</h1>
		</div>
        <div class="col-lg-9">
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Item price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead> 
  <tbody class="text-center">
  <?php
  $total=0;
  if(isset($_SESSION['cart']))
  {
  	foreach($_SESSION['cart'] as $key => $value)
	{
		//print_r($value);	// 	NEED TO SOLVE TO SHOW 'Item_Name' IN THE TABLE.......
		$total=$total+$value['Price'];
		$sr=$key+1;
		echo "<tr>
				<td>$sr</td>
			   
				<td>$value[Price]</td>
				<td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
				<td>
				<form action='manage_cart.php' method='post'>
				<button name='Remove_Item' class= 'btn btn-sm btn-outline-danger'>REMOVE</button>
				
				</form>
				</td>
				
			  </tr>";	
	}
  }
  ?>    
  </tbody>
</table>
        </div>
        <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
        	<h4 >Total:</h4>
            <h5 class="text-right" ><?php echo $total; ?></h5>
            <br/>
            <form>
            <div class="form-check">
 		 	<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  			<label class="form-check-label" for="flexRadioDefault1">
    		Offline Mode
  			</label>
			</div>
			<div class="form-check">
  			<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  			<label class="form-check-label" for="flexRadioDefault2">
    		Online Mode
  			</label>
			</div>
            <br/>
            <button class="btn btn-primary btn-block">Confirm Order</button>
            </form>
        </div>
        </div>
	</div>
</div>


</body>
</html>