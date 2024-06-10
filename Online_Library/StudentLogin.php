<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>
<header style="height: 90px;">
  
<div class="logo">
      <h1 style="color: black; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>

      <!-- <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="books.php">BOOKS</a></li>
          <li><a href="StudentLogin.php">STUDENT-LOGIN</a></li>
          <li><a href="admin.php">ADMIN_LOGIN</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
          <li><a href="registration.php">Registration</a></li>  -->
        <!-- </ul>
      </nav> -->
</header>
<section>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form name="login" action="" method="">
        <br><br>
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <button>Login</button></div>
      </form>
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        New to this website?<a style="color: white;" href="registration.php">Sign Up</a>
      </p>
    </div>
  </div>
</section>

</body>
</html>

