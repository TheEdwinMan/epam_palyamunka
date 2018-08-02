<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'epam');
mysqli_select_db($con, 'users');

$usern = $_SESSION['username'];
$uname = mysqli_real_escape_string($con, $_POST['uname']);

$checkexist = mysqli_query($con, "SELECT username FROM users WHERE username='$uname'");
if (mysqli_num_rows($checkexist)) {
} else {
    mysqli_query($con, "UPDATE users SET username='$uname' WHERE username='$usern'");
    $_SESSION['username'] = $uname;
    echo $_SESSION['username'];
}