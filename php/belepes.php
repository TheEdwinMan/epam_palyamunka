<?php
include '../config/config.php';
mysqli_select_db($con, 'users');
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($result)) {
    $res = mysqli_fetch_array($result);
    $_SESSION['username'] = $res['username'];
    $_SESSION['password'] = $res['password'];
    echo $res['username'];
}
