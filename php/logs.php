<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'epam');
mysqli_select_db($con, 'logs');
$uname = $_SESSION['username'];
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
