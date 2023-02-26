<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/register.css?v=<?php echo time();?>">
  <title>Register</title>
</head>

<body>
   
  <!-- header section starts  -->
    <?php include '../include/header.php'; ?>
  <!-- End Header -->

<div class="heading" style="background:url(../img/header-bg-3.png) no-repeat">
  <h1>register</h1>
</div>

<!-- register section starts  -->


<section class="reg">

   <h1 class="heading-title">Please enter your credentials to register</h1>

   <form method="POST" action="../loginRegister/loginValidation.php" class="reg-form">

      <div class="flex">
         <div class="inputBox">
            <span>First Name :</span>
            <input type="text" placeholder="enter your first name" id="fname" name="firstname" required>
         </div>
         <div class="inputBox"> 
            <span>Last Name :</span>
            <input type="text" placeholder="enter your last name" id="lname" name="lastname" required>
        </div>
         <div class="inputBox">
            <span>City :</span>
            <input type="text" placeholder="enter your city" id="city" name="city" required>
         </div>
         <div class="inputBox">
            <span>Country :</span>
            <input type="text" placeholder="enter your country" id="country" name="country" required>
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="enter your number" id="phone" name="phone" required>
         </div>
         <div class="inputBox">
          <span>Create a username :</span>
            <input type="text" placeholder="enter your new username" id="username" name="username" required>
        </div>
         <div class="inputBox">
            <span>Enter an email </span>
            <input type="email" placeholder="enter your email" id="email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Enter an password</span>
            <input type="password" placeholder="enter password" id="password" name="password" required>
         </div>
         
         
      </div>

      <input type="submit" value="register" class="btn" name="register" > 
      <!--onclick=validateRegister()-->
      <p class="message">Registered? <a href="login.php">Login here</a></p> 

   </form>

</section>

<!-- register section ends -->



<!-- footer section starts  -->

<?php include '../include/footer.php'; ?>
 
<!-- footer section ends -->

<!-- swiper js link  -->
<script src="../javascript/app.js"></script>

</body>
</html>