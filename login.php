<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css code/login.css">
  <title>Login</title>
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
           <li><a href="index.php" data-after="Home">Home</a></li>
           <li><a href="packages.php" data-after="Service">Packages</a></li>
           <li><a href="index.php" data-after="About">About</a></li>
           <li><a href="index.php" data-after="Contact">Contact</a></li>
           <li><a href="register.php" data-after="Contact">Register</a></li>
           <li><a href="login.php" data-after="Contact">Log In</a></li>
           <li><a href="book.php" data-after="Contact">Book now</a></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
<!-- header section ends -->

<div class="heading" style="background:url(img/header-bg-3.png) no-repeat">
  <h1>Log in</h1>
</div>

<!-- login section starts  -->

<section class="login">

  <h1 class="heading-title">Login now!</h1>

  <form method="post" class="login-form">

     <div class="flex">
  
        <div class="inputBox">
           <span>email :</span>
           <input type="email" placeholder="enter your email" id="email" name="email">
        </div>
        <br></br>
        <div class="inputBox">
           <span>Password :</span>
           <input type="password" placeholder="enter your password" id="password" name="pasi">
        </div>
     </div>

     <input type="submit" value="login" class="btn" name="send" onclick="validateLogin()">
     <p class="message">Not registered? <a href="register.html">Create an account</a></p> 

  </form>

</section>

<!-- login section ends -->


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
<script src="javascript code/app.js"></script>

</body>
</html>

<?php
$connection = mysqli_connect('localhost', 'root','','')




?>