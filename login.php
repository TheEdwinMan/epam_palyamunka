<?php
if(!isset($_SESSION['username'])){
?>
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
<script>
	function regis(){
		var uname = $('#username').val();
		var pword = $('#password').val();
		var pword2 = $('#password2').val();
		if(uname == '' || pword == '' || pword2 == '')
		{
			$('#error_message').html('');
			$("#error_message").show();
			$('#error_message').html("Semmi sem maradhat üres!");
			setTimeout(function(){
				$('#error_message').fadeOut("Slow");
			}, 2000);
		}
		else
		{
			if(pword != pword2)
			{
				$('#error_message').html('');
				$("#error_message").show();
				$('#error_message').html("A jelszavak nem egyeznek!");
				setTimeout(function(){
					$('#error_message').fadeOut("Slow");
				}, 2000);

			}
			else{
				$.ajax({
					url:"register.php",
					method:"POST",
					data:{uname:uname, pword:pword},
					success:function(data){
						if(data){
							$('#error_message').html('');
							$('#error_message').show().html("Ez a felhasználónév már létezik, válassz másikat.");
							setTimeout(function(){
								$('#error_message').fadeOut("Slow");
							}, 3000);
						}
						else{
							document.getElementById('loginform').style.display = 'block';
							document.getElementById('register').style.display = 'none';
							$('#message_log').html('');
							$("form").trigger("reset");
							$('#message_log').show().html("Sikeresen regisztáltál. Jelentkezz be!");
							setTimeout(function(){
								$('#message_log').fadeOut("Slow");
							}, 3000);
						}
					}
				});
			}}
		}
		function regise(e){
	if (e.keyCode == 13){
		var uname = $('#username').val();
		var pword = $('#password').val();
		var pword2 = $('#password2').val();
		if(uname == '' || pword == '' || pword2 == '')
		{
			$('#error_message').html('');
			$("#error_message").show();
			$('#error_message').html("Semmi sem maradhat üres!");
			setTimeout(function(){
				$('#error_message').fadeOut("Slow");
			}, 2000);
		}
		else
		{
			if(pword != pword2)
			{
				$('#error_message').html('');
				$("#error_message").show();
				$('#error_message').html("A jelszavak nem egyeznek!");
				setTimeout(function(){
					$('#error_message').fadeOut("Slow");
				}, 2000);

			}
			else{
				$.ajax({
					url:"register.php",
					method:"POST",
					data:{uname:uname, pword:pword},
					success:function(data){
						if(data){
							$('#error_message').html('');
							$('#error_message').show().html("Ez a felhasználónév már létezik, válassz másikat.");
							setTimeout(function(){
								$('#error_message').fadeOut("Slow");
							}, 3000);
						}
						else{
							document.getElementById('loginform').style.display = 'block';
							document.getElementById('register').style.display = 'none';
							$('#message_log').html('');
							$("form").trigger("reset");
							$('#message_log').show().html("Sikeresen regisztáltál. Jelentkezz be!");
							setTimeout(function(){
								$('#message_log').fadeOut("Slow");
							}, 3000);
						}
					}
				});
			}}
			return false;
		}
 }

 function login(){
	 var username = $('#username_log').val();
	 var password = $('#password_log').val();
	 if(username == '' || password == ''){
		 $('#message_log').html('');
		 $("#message_log").show();
		 $('#message_log').html("Semmi sem maradhat üres!");
		 setTimeout(function(){
			 $('#message_log').fadeOut("Slow");
		 }, 2000);
	 }
	 else{
		 $.ajax({
			 url:"belepes.php",
			 method:"POST",
			 data:{username:username, password:password},
			 success:function(data){
				 if(data){
					 $("body").load("index.php").hide().show();
				 }
				 else{
					 $('#message_log').html('');
					 $('#message_log').show().html("Hibás vagy nem létező bejelenzkezési adatok.");
					 setTimeout(function(){
						 $('#message_log').fadeOut("Slow");
					 }, 3000);
				 }
			 }
		 });
	 }
 }

 function logine(e){
	 if (e.keyCode == 13){
		 var username = $('#username_log').val();
		 var password = $('#password_log').val();
		 if(username == '' || password == ''){
			 $('#message_log').html('');
			 $("#message_log").show();
			 $('#message_log').html("Semmi sem maradhat üres!");
			 setTimeout(function(){
				 $('#message_log').fadeOut("Slow");
			 }, 2000);
		 }
		 else{
			 $.ajax({
				 url:"belepes.php",
				 method:"POST",
				 data:{username:username, password:password},
				 success:function(data){
					 if(data){
						 $("body").load("index.php").hide().show();
					 }
					 else{
						 $('#message_log').html('');
						 $('#message_log').show().html("Hibás vagy nem létező bejelenzkezési adatok.");
						 setTimeout(function(){
							 $('#message_log').fadeOut("Slow");
						 }, 3000);
					 }
				 }
			 });
		 }
		 return false;
	 }
 }

</script>
<?php
	exit;
}else{
	include 'leiras.php';
}

?>
