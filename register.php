<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css code/register.css">
  <title>Register</title>
</head>

<body>
   
<!-- header section starts  -->
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
              <li><a href="loginRegister/logout.php" data-after="Contact">Log Out</a></li>
              <?php
            }
            ?>
            <li><a href="book.php" data-after="Contact">Book now</a></li>
          </ul>
       </div>
     </div>
   </div>
 </section>
<!-- header section ends -->

<div class="heading" style="background:url(img/header-bg-3.png) no-repeat">
  <h1>register</h1>
</div>

<!-- register section starts  -->

<section class="reg">

   <h1 class="heading-title">Please enter your credentials to register</h1>

   <form method="POST" action="loginRegister/loginValidation.php" class="reg-form">

      <div class="flex">
         <div class="inputBox">
            <span>First Name :</span>
            <input type="text" placeholder="enter your first name" id="fname" name="firstname">
         </div>
         <div class="inputBox">
            <span>Last Name :</span>
            <input type="text" placeholder="enter your last name" id="lname" name="lastname">
        </div>
         <div class="inputBox">
            <span>City :</span>
            <input type="text" placeholder="enter your city" id="city" name="city">
         </div>
         <div class="inputBox">
            <span>Country :</span>
            <input type="text" placeholder="enter your country" id="country" name="country">
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="enter your number" id="phone" name="phone">
         </div>
         <div class="inputBox">
          <span>Create a username :</span>
            <input type="text" placeholder="enter your new username" id="username" name="username">
        </div>
         <div class="inputBox">
            <span>Enter an email </span>
            <input type="email" placeholder="enter your email" id="email" name="email">
         </div>
         <div class="inputBox">
            <span>Enter an password</span>
            <input type="password" placeholder="enter password" id="password" name="password" >
         </div>
         
         
      </div>

      <input type="submit" value="register" class="btn" name="register" onclick="validoMeRegex()">
      <p class="message">Registered? <a href="login.php">Login here</a></p> 

   </form>

</section>

<!-- register section ends -->



<!-- footer section starts  -->

<section id="footer">
   <div class="footer container">
     <div class="brand">
      <h1><span>V</span>D <span>t</span>r<span>i</span>p</h1>
     </div>
     <div class="social-icon">
       <div class="social-item">
         <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
       </div>
       <div class="social-item">
         <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
       </div>
     </div>
     <p>Copyright © 2022 VD trip. All rights reserved</p>
   </div>
 </section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="javascript code/app.php"></script>

</body>
</html>