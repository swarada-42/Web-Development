<?php
    $db=mysqli_connect("localhost","root","root","library");
if(!$db)
{
    die("connection failed: " . mysqli_connect_error());
}
echo "Connection successful";
?>