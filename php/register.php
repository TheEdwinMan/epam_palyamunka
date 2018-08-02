<?php
$con = mysqli_connect('localhost', 'root', '', 'epam');
mysqli_select_db($con, 'users');

if (isset($_POST['uname'])) {
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $pword = mysqli_real_escape_string($con, $_POST['pword']);

    $checkexist = mysqli_query($con, "SELECT username FROM users WHERE username='$uname'");
    if (mysqli_num_rows($checkexist)) {
        echo "data";
    } else {
        mysqli_query($con, "INSERT INTO users (username, password) VALUES ('$uname', '$pword')");
    }
}
