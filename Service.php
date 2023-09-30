<?php
include("header.php");

?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>service page</title>
	<link rel="stylesheet" href="header.css">
</head>

<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="Menshair.jpg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Mens Haircut</h5>
							<p class="card-text">Price 250/-</p>
							<button type="submit" name="add_to_cart" class="btn btn-secondary">Add to cart</button>
							<input type="hidden" name="Item_Name" value="Mens Haircut" />
							<input type="hidden" name="Price" value="250" />
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="beardtrim.jpg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Beard Trim</h5>
							<p class="card-text">Price 120/-</p>
							<button type="submit" name="add_to_cart" class="btn btn-secondary">Add to cart</button>
							<input type="hidden" name="Item_Name" value="Beard Trim" />
							<input type="hidden" name="Price" value="120" />
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="childhair.jpg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Child Haircut</h5>
							<p class="card-text">Price 200/-</p>
							<button type="submit" name="add_to_cart" class="btn btn-secondary">Add to cart</button>
							<input type="hidden" name="Item_Name" value="Child Haircut" />
							<input type="hidden" name="Price" value="200" />
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="waxing.jpg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Waxing</h5>
							<p class="card-text">Price 550/-</p>
							<button type="submit" name="add_to_cart" class="btn btn-secondary">Add to cart</button>
							<input type="hidden" name="Item_Name" value="Waxing" />
							<input type="hidden" name="Price" value="500" />
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="threading.jpeg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Threading</h5>
							<p class="card-text">Price 70/-</p>
							<button type="submit" name="add_to_cart" class="btn btn-secondary">Add to cart</button>
							<input type="hidden" name="Item_Name" value="Mens Haircut" />
							<input type="hidden" name="Price" value="250" />
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="haircolor.jpg" class="card-img-top hair-color">
						<div class="card-body">
							<h5 class="card-title">Hair Color</h5>
							<p class="card-text">Price 300/-</p>
							<button type="submit" name="add_to_cart" class="btn btn-secondary">Add to cart</button>
							<input type="hidden" name="Item_Name" value="Beard Trim" />
							<input type="hidden" name="Price" value="120" />
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="facial2.0.png" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Facial</h5>
							<p class="card-text">Price 250/-</p>
							<button type="submit" name="add_to_cart" class="btn btn-secondary">Add to cart</button>
							<input type="hidden" name="Item_Name" value="Child Haircut" />
							<input type="hidden" name="Price" value="200" />
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="massage.jpg" class="card-img-top massage">
						<div class="card-body">
							<h5 class="card-title">Head Massage</h5>
							<p class="card-text">Price 150/-</p>
							<button type="submit" name="add_to_cart" class="btn btn-secondary">Add to cart</button>
							<input type="hidden" name="Item_Name" value="Waxing" />
							<input type="hidden" name="Price" value="500" />
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
	<footer>
		<div class="foot-panel1">
			<ul class="column1">
				<p>Quick Links</p>
				<a href="Home.php">Home</a>
				<a href="About.php">About us</a>
				<a href="Ser.php">What We Offer</a>
				<a href="Contact.php">Contact Us</a>
			</ul>

			<ul class="column2">
				<p>Contact</p>
				<a>
					Bhawanipore,Kolkata
				</a>
				<a>Phone:8232923771</a>
				<a>Email: sankalpshaw2016@gmail.com</a>
			</ul>
			<ul class="Subs">
				<section>
					<h2>Subscribe</h2>
					<form id="subscribeForm">
						<input type="email" id="email" name="email" placeholder="Enter your email" required>
						<button type="submit" id="subscribeButton">Submit</button>
					</form>
				</section>

				<script>
					document.getElementById("subscribeForm").addEventListener("submit", function (event) {
						event.preventDefault(); // Prevent the form from submitting normally

						var email = document.getElementById("email").value;

						if (email === "") {
							alert("Please enter your email address.");
							return;
						}

						alert("Thank you for subscribing with email: " + email);

						document.getElementById("email").value = ""; // Clear the input field
					});
				</script>
			</ul>
		</div>

		</div>
		<div class="copyright">
			© 2002-2023, Sankalp Shaw, Inc. or its affiliates
		</div>
		</div>

	</footer>
</body>

</html>