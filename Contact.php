<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport"
        content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>Desi Barber</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <header>
        <div class="navbar bg-light navbar-expand-lg">
            <div class="nav-logo">
                <span>Desi Barber</span>
            </div>
            <div class="nav-options">
                <div class="dropdown-content">
                    <a class="desi-link" href="Home.php">Home</a>
                    <a class="desi-link" href="About.php">About</a>
                    <a class="desi-link" href="Service.php">Services</a>
                    <a class="desi-link" href="Contact.php">Contact</a>
                </div>
            </div>
            <div class="nav-cart border">
                <?PHP
                $count = 0;
                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                }
                ?>
                <a href="mycart.php" class="btn btn-outline-success">MY Cart(
                    <?php echo "$count"; ?>)
                </a>
            </div>
        </div>

    </header>

	
    <!--DATABASE CONEECTION-->
	<center><?php include('contact_conn.php');?></center>


    <div class="sankalp">
        <h1>Contact Us</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" id="phone" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="text" id="address" name="address"></td>
                </tr>
                <tr>
                    <td><label for="message">Message:</label></td>
                    <td><textarea id="message" name="message" rows="4" required></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>

    <footer>
        <div class="foot-panel1">
            <ul class="column1">
                <p>Quick Links</p>
                <a href="Home.php">Home</a>
                <a href="About.php">About us</a>
                <a href="Service.php">What We Offer</a>
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