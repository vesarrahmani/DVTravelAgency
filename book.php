<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css code/book.css">
  <title>Book</title>
</head>

<body>
   
<!-- header section starts  -->

<section id="header">
   <div class="header container">
     <div class="nav-bar">
       <div class="brand">
         <a href="index.html">
           <h1><span>V</span> <span>D </span>trip</h1>
         </a>
       </div>
       <div class="nav-list">
         <div class="hamburger">
           <div class="bar"></div>
         </div>
         <ul>
           <li><a href="index.html" data-after="Home">Home</a></li>
           <li><a href="packages.html" data-after="Service">Packages</a></li>
           <li><a href="index.html" data-after="About">About</a></li>
           <li><a href="index.html" data-after="Contact">Contact</a></li>
           <li><a href="register.html" data-after="Contact">Register</a></li>
           <li><a href="login.html" data-after="Contact">Log In</a></li>
           <li><a href="book.html" data-after="Contact">Book now</a></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
<!-- header section ends -->

<div class="heading" style="background:url(img/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" id="name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" id="email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" id="phone" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" id="alphanum" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" id="text" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" id="num" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" class="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" class="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send" onclick="validoMeRegex()">

   </form>

</section>

<!-- booking section ends -->

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

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>