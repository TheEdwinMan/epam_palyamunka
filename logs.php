<?php
$con = mysqli_connect('localhost','root','','epam');
mysqli_select_db($con,'logs');

$result1 = mysqli_query($con, "SELECT * FROM logs ORDER by id ASC");

while($extract = mysqli_fetch_array($result1)){
  echo $extract['username'] . ": " . $extract['msg'] . "<br>";
}
?>
