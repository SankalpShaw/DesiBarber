<?php
session_start();
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


</body>

</html>