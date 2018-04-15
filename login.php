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
			<span class = "spanszin" id="error_message"></span
			<p class = "message">Már regisztáltál? <a onclick = "hide();" href="#">Jelentkezz be</a></p>
		</form>
		<form id="loginform">
			<input type="text" id="username_log" placeholder="Felhasználónév">
			<input type="password" id="password_log" placeholder="Jelszó">
			<div class="button" href="#"><a class="nkij">Bejelentkezés</a><br></div>
			<span class = "spanszin" id="message_log"></span
			<p class = "message">Nincs fiokod? <a onclick = "hide();" href="#">Regisztrálj</a></p>
		</form>
		<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
		<script>
			function hide(){
				var loginform = document.getElementById('loginform');
				var register = document.getElementById('register');
				if(loginform.style.display == 'none'){
					loginform.style.display = 'block';
					register.style.display = 'none';
				}
				else{
					loginform.style.display = 'none';
					register.style.display = 'block';
				}
			}
		</script>
	</div>
</div>
<?php
	exit;
}else{
	include 'leiras.php';
}

?>