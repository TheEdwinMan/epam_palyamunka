<?php
  session_start();
  $con = mysqli_connect('localhost','root','','epam');
  mysqli_select_db($con,'users');

  $usern = $_SESSION['username'];
  mysqli_query($con,"DELETE FROM users WHERE username='$usern'");
?>
