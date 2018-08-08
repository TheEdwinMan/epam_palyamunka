<?php
include '../config/config.php';
$oldal = mysqli_real_escape_string($con, $_POST['oldal']);
echo $oldal;