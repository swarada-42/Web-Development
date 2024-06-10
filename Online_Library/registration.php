<?php
    include "connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<header style="height: 100px;">
    <div class="logo">
        
        <h1 style="color: yellow;font-size: 25px;word-spacing:10px;line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>
        <!-- <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="StudentLogin.php">STUDENTLOGIN</a></li>
                <li><a href="registration.php">REGISTRATION</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>

            </ul>
        </nav> -->
</header>

<!-- <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="books.php">BOOKS</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

          <li><a href="StudentLogin.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
          <li><a href="StudentLogin.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
          <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN-UP</span></a></li>
          <li><a href="StudentLogin.php"><span class="glyphicon glyphicon-user"></span></a></li>
        </ul>

    </div>
  </nav> -->

<section>
    <div class="reg_img">
        <br><br><br>
        <div class="box2">
            <h1 style="text-align: center;font-size: 35px;font-family: Lucida Console;"> &nbsp &nbspLibrary Management System</h1>
            <h1 style="text-align: center;font-size: 25px;">User Registration Form</h1><br>
           <form name="Registration" action="" method="">
            
            <div class="login">
            <input class="form-control" type="text" name="First" placeholder="First Name" required=""><br>
            <input class="form-control" type="text" name="Last" placeholder="Last Name" required=""><br>
            <input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
            <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
            <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
            <input class="form-control" type="text" name="Email" placeholder="Email" required=""><br>
            <input class="form-control" type="text" name="Contact" placeholder="Contact" required=""><br>
            <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black;width: 70px;height: 30px;"></div>
           </form>
        </div>    
    </div>
</section>

<?php

if(isset($_POST['submit']))
{
  $count=0;
  $sql="SELECT username from `student`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['username']==$_POST['username'])
    {
      $count=$count+1;
    }
  }
  if($count==0)
  {
    mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]');");
  ?>
    <script type="text/javascript">
     alert("Registration successful");
    </script>
  <?php
  }
  else
  {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
    <?php

  }

}

?>

</body>
</html>