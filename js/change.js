function hide() {
    var loginform = document.getElementsByClassName('login-page__login');
    var register = document.getElementsByClassName('login-page__register');
    if (loginform[0].style.display == 'none') {
        loginform[0].style.display = 'block';
        register[0].style.display = 'none';
    }
    else {
        loginform[0].style.display = 'none';
        register[0].style.display = 'block';
    }
}