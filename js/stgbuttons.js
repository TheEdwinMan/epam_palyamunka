function torles(){
	var bizti = confirm("Biztos hogy törlöd a felhasználót?");
	if (bizti == true){
		$.ajax({
			url:"php/torles.php",
			success:function(data){
				if(data){}
				else{
					$.ajax({
						url:"php/logout.php",
						method:"POST",
						success:function(data){
							if(data){
								$("body").load("index.php").hide().show();
							}
						}
					});
				}
			}
		});
	}
	else{
		 $('#error_torl').html('');
		 $('#error_torl').show().html("A felhasználó nem lett törölve.");
		 setTimeout(function(){
			 $('#error_torl').fadeOut("Slow");
		 }, 2000);
	}
}

function ujfneve(e){
	if (e.keyCode == 13){
		var uname = $('#username').val();
		if(uname == ''){
			$('#error_ujnev').html('');
			$("#error_ujnev").show();
			$('#error_ujnev').html("Nem maradhat üres!");
			setTimeout(function(){
				$('#error_ujnev').fadeOut("Slow");
			}, 2000);
		}
		else
		{
			$.ajax({
				url:"php/ujnev.php",
				method:"POST",
				data:{uname:uname},
				success:function(data){
					if(data){
						$('#success_ujnev').html('');
						$('#error_ujnev').html('');
						$("form").trigger("reset");
						$('#success_ujnev').show().html("Felhasználónév sikeresen megváltoztatva");
						document.getElementById("f").innerHTML = data;
						$('nev').html(data);
						setTimeout(function(){
							$('#success_ujnev').fadeOut("Slow");
						}, 2000);
					}
					else{
						$('#success_ujnev').html('');
						$('#error_ujnev').html('');
						$('#error_ujnev').show().html("Ez a név már létezik");
						setTimeout(function(){
							$('#error_ujnev').fadeOut("Slow");
						}, 2000);
					}
				}
			});
		}return false;
	}
}

function ujfnev(){
	var uname = $('#username').val();
	if(uname == ''){
		$('#error_ujnev').html('');
		$("#error_ujnev").show();
		$('#error_ujnev').html("Nem maradhat üres!");
		setTimeout(function(){
			$('#error_ujnev').fadeOut("Slow");
		}, 2000);
	}
	else
	{
		$.ajax({
			url:"php/ujnev.php",
			method:"POST",
			data:{uname:uname},
			success:function(data){
				if(data){
					$('#success_ujnev').html('');
					$('#error_ujnev').html('');
					$("form").trigger("reset");
					$('#success_ujnev').show().html("Felhasználónév sikeresen megváltoztatva");
					document.getElementById("f").innerHTML = data;
					$('nev').html(data);
					setTimeout(function(){
						$('#success_ujnev').fadeOut("Slow");
					}, 2000);
				}
				else{
					$('#success_ujnev').html('');
					$('#error_ujnev').html('');
					$('#error_ujnev').show().html("Ez a név már létezik");
					setTimeout(function(){
						$('#error_ujnev').fadeOut("Slow");
					}, 2000);
				}
			}
		});
	}
}

function ujjelszo(){
	var pword = $('#password').val();
	var pword2 = $('#password2').val();
	if(pword == '' || pword2 == '')
	{
		$('#error_ujjel').html('');
		$("#error_ujjel").show();
		$('#error_ujjel').html("Semmi sem maradhat üres!");
		setTimeout(function(){
			$('#error_ujjel').fadeOut("Slow");
		}, 2000);
	}
	else{
		if(pword != pword2){
			$('#success_uj').html('');
			$('#error_ujjel').html('');
			$("#error_ujjel").show();
			$('#error_ujjel').html("A jelszavak nem egyeznek!");
			setTimeout(function(){
				$('#error_ujjel').fadeOut("Slow");
			}, 2000);
		}
		else{
			$.ajax({
				url:"php/ujjelszo.php",
				method:"POST",
				data:{pword:pword},
				success:function(data){
					if(data){}
					else{
						$('#success_uj').html('');
						$('#error_ujjel').html('');
						$("form").trigger("reset");
						$('#success_uj').show().html("Jelszó sikeresen megváltoztatva");
						setTimeout(function(){
							$('#success_uj').fadeOut("Slow");
						}, 2000);
					}
				}
			});
		}
	}
}
function ujjelszoe(e){
	if (e.keyCode == 13){
		var pword = $('#password').val();
		var pword2 = $('#password2').val();
		if(pword == '' || pword2 == '')
		{
			$('#error_ujjel').html('');
			$("#error_ujjel").show();
			$('#error_ujjel').html("Semmi sem maradhat üres!");
			setTimeout(function(){
				$('#error_ujjel').fadeOut("Slow");
			}, 2000);
		}
		else{
			if(pword != pword2){
				$('#success_uj').html('');
				$('#error_ujjel').html('');
				$("#error_ujjel").show();
				$('#error_ujjel').html("A jelszavak nem egyeznek!");
				setTimeout(function(){
					$('#error_ujjel').fadeOut("Slow");
				}, 2000);
			}
			else{
				$.ajax({
					url:"php/ujjelszo.php",
					method:"POST",
					data:{pword:pword},
					success:function(data){
						if(data){}
						else{
							$('#success_uj').html('');
							$('#error_ujjel').html('');
							$("form").trigger("reset");
							$('#success_uj').show().html("Jelszó sikeresen megváltoztatva");
							setTimeout(function(){
								$('#success_uj').fadeOut("Slow");
							}, 2000);
						}
					}
				});
			}
		}return false;
	}
}
