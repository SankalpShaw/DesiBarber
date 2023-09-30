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

    <div class="first">
        <section>
            <video src="oursmoke.mp4" autoplay muted></video>

            <div class="first-image">
                <h1>
                    <span>D</span>
                    <span>E</span>
                    <span>S</span>
                    <span>I</span>
                    <span>B</span>
                    <span>A</span>
                    <span>R</span>
                    <span>B</span>
                    <span>E</span>
                    <span>R</span>
                </h1>
        </section>
    </div>
    </div>

    <div class="about-us">
        <div class="fr">
            <div class="a-col">
                <h1>Welcome to Desi Barber: Where Style Gets a Dash of Tradition</h1>
                <span>
                    <p>Step into Desi Barber, where we blend timeless grooming traditions with a modern twist to keep
                        you looking sharp and feeling your best.</p>
                    <p>Our skilled barbers are the maestros of grooming magic, seamlessly fusing classic techniques with
                        today's trendiest styles. Whether you're after a timeless cut or the latest in beard artistry,
                        our barbers are artists with clippers and razors.</p>
                    <p> Desi Barber isn't just a salon; it's your haven for relaxation and rejuvenation. Nestled in a
                        cozy atmosphere, it's where you escape the daily grind and unwind in style.</p>
                    <p>Trust is our badge of honor. Our loyal patrons keep coming back because we treat them like
                        cherished friends. At Desi Barber, you're more than a customer; you're part of our grooming
                        family.</p>
                </span>
                <a href="Contact.php" class="contact-button">Contact Us</a>
            </div>
            <div class="a-col_image">
                <img src="thum.jpg" alt="hair cut image">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="column">
            <h2>Our Vision</h2>
            <p>"Transforming grooming into an art, we craft timeless style and confidence with every touch, one grooming
                session at a time. At Desi Barber, we envision a world where every man feels empowered by his unique
                style and personality, leaving a lasting impression."</p>
        </div>
        <div class="column">
            <h2>Our Mission</h2>
            <p>"Committed to your well-being, we empower your best self through exceptional grooming services, providing
                not just care, but a pathway to greater confidence. Our mission is to make every visit to Desi Barber an
                experience that not only enhances your appearance but also uplifts your spirit."</p>
        </div>
        <div class="column">
            <h2>Our Strengths</h2>
            <p>"At Desi Barber, your confidence is our greatest strength. With expert care and personalized service,
                we're dedicated to elevating your style journey, one visit at a time. Our strength lies in our
                unwavering commitment to your satisfaction, ensuring that you leave our salon not just looking great,
                but feeling extraordinary."</p>
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