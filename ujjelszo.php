<?php
session_start();
$con = mysqli_connect('localhost','root','','epam');
mysqli_select_db($con,'users');

$user = $_SESSION['username'];
$pword = mysqli_real_escape_string($con, $_POST['pword']);
mysqli_query($con,"UPDATE users SET password='$pword' WHERE username='$user'");
$_SESSION['password'] = $pword;
?>
