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
  <h1>register</h1>
</div>

<!-- register section starts  -->

<section class="reg">

   <h1 class="heading-title">Please enter your credentials to register</h1>

   <form method="post" class="reg-form">

      <div class="flex">
         <div class="inputBox">
            <span>First Name :</span>
            <input type="text" placeholder="enter your first name" id="fname" name="fname">
         </div>
         <div class="inputBox">
            <span>Last Name :</span>
            <input type="text" placeholder="enter your last name" id="lname" name="lname">
         </div>
         <div class="inputBox">
            <span>Date of Birth :</span>
            <input type="date" class="date" name="dob">
         </div>
         <div class="inputBox">
          <span>Age :</span>
            <input type="text" placeholder="enter your age" id="age" name="age">
        </div>
         <div class="inputBox">
            <span>City :</span>
            <input type="text" placeholder="enter your city" id="city" name="address">
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
            <span>Enter an email </span>
            <input type="email" placeholder="enter your email" id="email" name="email">
         </div>
         <div class="inputBox">
            <span>Enter an password</span>
            <input type="password" placeholder="enter password" id="password" name="password" >
         </div>
         <div class="inputBox">
            <span>Confirm password</span>
            <input type="password" placeholder="confirm password" id="cpassword" name="cpassword" >
         </div>
         
      </div>

      <input type="submit" value="register" class="btn" name="send" onclick="validoMeRegex()">
      <p class="message">Registered? <a href="login.html">Login here</a></p> 

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
<script src="javascript code/app.js"></script>

</body>
</html>