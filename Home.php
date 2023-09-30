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

    <!-- first container -->
    <div class="home-container">
        <div class="container">
            <div class="content">
                <h2 class="home-title">Look Your Best with <br> Desi Barber</h2>
                <p>Experience exceptional grooming and styling services at Desi Barber. Our professional barbers are
                    dedicated to providing top-notch men's haircuts and styling that will leave you looking sharp and
                    confident.</p>
                <button class="contact-button"><a href="Contact.php">Contact Us</a></button>
            </div>
            <div class="image">
                <img src="thumb_pexels-images_1691091812_w1920_fwidth.webp" alt="Desi Barber Image">
            </div>
        </div>
    </div>

    <!-- Second container -->
    <div class="new-container">
        <div class="new-content">
            <h2>Welcome to Desi Barber</h2>
            <p>At Desi Barber, we take pride in offering the finest barber shop services in town. Our team of skilled
                barbers is committed to delivering exceptional grooming experiences tailored to your unique style and
                preferences.</p>
        </div>
    </div>

    <!-- Third container -->
    <div class="third-container">
        <a href="Service.php">
            <div class="image-box">

                <img src="Menshair.jpg" alt="Image 1">

                <div class="image-text">
                    Men's Hair Cuts
                </div>
            </div>
        </a>
        <a href="Service.php">
            <div class="image-box">
                <img src="pexels-pavel-danilyuk-7518737.jpg" alt="Image 2">
                <div class="image-text">Beard Trimming And Grooming</div>
            </div>
    </div></a>



    <!-- Fourth container -->
    <div class="fourth-container">
        <div class="container-background-image">
            <!-- Background image for the container -->
            <img src="fouthimage.jpg" alt="Image 3">
        </div>
        <div class="container-content">
            <h2>Elevate Your Style with Desi Barber</h2>
            <p>Our experienced barbers are dedicated to helping you achieve your desired look by providing exceptional
                grooming services that will leave you feeling confident and stylish.</p>
            <button class="button">
                <a href="Contact.php"><span>Contact Us Today</span></a>
            </button>
        </div>
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

                            alert("Thank you for subscribing with email: " + email);

                            document.getElementById("email").value = ""; // Clear the input field
                        });
                </script>
            </ul>
        </div>

        </div>
        <div class="copyright">
            &copy; 2002-2023, Sankalp Shaw, Inc. or its affiliates
        </div>
        </div>

    </footer>

</body>

</html>