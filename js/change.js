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