<?php
include '../config/config.php';
mysqli_select_db($con, 'logs');

$uname = $_SESSION['username'];
$msg = $_REQUEST['msg'];

mysqli_query($con, "INSERT INTO logs (username, msg) VALUES ('$uname','$msg')");

$result1 = mysqli_query($con, "SELECT * FROM logs ORDER by id ASC");

while ($extract = mysqli_fetch_array($result1)) {
    if ($extract['username'] == $uname) {
        echo '
			<div class="msgbox" style="float: right">
				<p class="text">' . $extract['msg'] . '</p>
			</div>
			<div class="clear"></div>
		';
    } else {
        echo '
			<div class="msgbox">
				<p class="text"><b id="name">' . $extract['username'] . '</b>: ' . $extract['msg'] . '</p>
			</div>
			<div class="clear"></div>
		';
    }
}