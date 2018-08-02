<?php
include '../config/config.php';
mysqli_select_db($con, 'users');

$usern = $_SESSION['username'];
mysqli_query($con, "DELETE FROM users WHERE username='$usern'");