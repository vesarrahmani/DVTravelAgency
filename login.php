<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the values of the form fields
  $username = $_POST["username"];
  $password = $_POST["password"];

  // validimi i te dhenave


  if (empty($username) || empty($password)) {
    // Display an error message
    echo "Please enter a username and password.";
  } else {
    // Check if the username and password are correct
    if ($username == "myusername" && $password == "mypassword") {
      // Redirect to the home page or do something else
      header("Location: home.php");
      exit();
    } else {
      // Display an error message
      echo "Invalid username or password.";
    }
  }
}
?>

