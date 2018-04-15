<?php
session_start();
$con = mysqli_connect('localhost','root','','epam')
mysqli_select_db($con,'logs');

$uname = $_SESSION['username'];
$msg = $_REQUEST['msg'];

mysqli_query($con, "INSERT INTO logs (username, msg) VALUES ('$uname','$msg')");

$result1 = mysqli_query($con, "SELECT * FROM logs ORDER by id ASC");

while($extract = mysqli_fetch_array($result1)){
  echo $extract['username'] . ": " . $extract['msg'] . "<br>";
}
?>
