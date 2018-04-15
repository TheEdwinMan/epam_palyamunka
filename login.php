<?php
if(!isset($_SESSION['username'])){
?>
<div class="login-page">
	<div class="form">
		<form id="register">
			<input type="text" id="username" placeholder="Felhasználónév">
			<input type="password" id="password" placeholder="Jelszó">
			<input type="password" id="password2" placeholder="Jelszó megerősítése">
			<div class="button" href="#"><a class="nkij">Regisztrálás</a><br></div>
		</form>
		<form id="login">
			<input type="text" id="username_log" placeholder="Felhasználónév">
			<input type="password" id="password_log" placeholder="Jelszó">
			<div class="button" href="#"><a class="nkij">Bejelentkezés</a><br></div>
		</form>
	</div>
</div>
<?php
	exit;
}else{
	include 'leiras.php';
}

?>