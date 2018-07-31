<?php
if(!isset($_SESSION['username'])){
?>
<script src="js/register.js"></script>
<script src="js/login.js"></script>
<script src="js/change.js"></script>
<div class="login-page">
	<div class="form">
			<form id="register">
				<input type="text" id="username" placeholder="Felhasználónév" onkeypress="return regise(event);">
				<input type="password" id="password" placeholder="Jelszó" onkeypress="return regise(event);">
				<input type="password" id="password2" placeholder="Jelszó megerősítése" onkeypress="return regise(event);">
				<div class="button" href="#" id="regis" onclick="regis();"><a class="nkij">Regisztrálás</a><br></div>
				<span class="spanszin" id="error_message"></span>
				<p class="message">Már regisztráltál? <a onclick="hide();" href="#">Jelentkezz be</a></p>
			</form>
			<form id="loginform">
				<input type="text" id="username_log" placeholder="Felhasználónév" onkeypress="return logine(event);">
				<input type="password" id="password_log" placeholder="Jelszó" onkeypress="return logine(event);">
				<div class="button" id="login" onclick="login();" href="#"><a class="nkij">Bejelentkezés</a><br></div>
				<span class = "spanszin" id="message_log"></span>
				<p class="message">Nincs fiokod? <a onclick="hide();" href="#">Regisztálj</a></p>
			</form>
	</div>
</div>
<?php
	exit;
}else{
	include 'leiras.php';
}

?>
