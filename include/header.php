
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <title>VDtrip</title>
    
</head>

<body>
    <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <h1><span>V</span> <span>D </span>trip</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <?php 
            session_start();
            if(isset($_SESSION['role']) && $_SESSION['role']== 1 ){
              ?>
              <li><a href="dashboard.php" data-after="Dashboard">Dashboard</a></li>
              <?php
            }
            ?>
              <li><a href="index.php#hero" data-after="Home">Home</a></li>
              <li><a href="packages.php" data-after="Service">Packages</a></li>
              <li><a href="index.php#about" data-after="About">About</a></li>
              <li><a href="index.php#contact" data-after="Contact">Contact</a></li>
              <li><a href="register.php" data-after="Contact">Register</a></li>
            <?php
            if(!isset($_SESSION['role'])){
              ?>
              <li><a href="login.php" data-after="Contact">Log In</a></li>
              <?php
            }
            ?>
            <?php
            if(isset($_SESSION['role'])){
            ?>
              <li><a href="../loginRegister/logout.php" data-after="Contact">Log Out</a></li>
            <?php
            }
            ?>

            <!--set an if case me logjiken qe pa qene login mos me u shfaq mundesia me bo book(rezervim) -->
            <?php
            if(isset($_SESSION['user']) && $_SESSION['user'] = 'loggedIn'){ 
            ?>
            <li><a href="book.php" data-after="Contact">Book now</a></li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

