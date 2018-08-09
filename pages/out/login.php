<?php
if (!isset($_SESSION['username'])) {
    ?>
    <div class="login-page">
        <form class="login-page__register">
            <input class="login-page__input" type="text" id="username" placeholder="Felhasználónév"
                   onkeypress="return regise(event);">
            <input class="login-page__input" type="password" id="password" placeholder="Jelszó"
                   onkeypress="return regise(event);">
            <input class="login-page__input" type="password" id="password2" placeholder="Jelszó megerősítése"
                   onkeypress="return regise(event);">
            <a class="button-links" href="#" id="regis" onclick="regis();">
                <div class="login-page__button">Regisztrálás</div>
            </a>
            <div class="clear"></div>
            <span class="message_css" id="error_message">_</span>
            <p class="login-page__text">Már regisztráltál? <a class="login-page__text-link" onclick="hide();" href="#">Jelentkezz be</a></p>
        </form>
        <form class="login-page__login">
            <input class="login-page__input" type="text" id="username_log" placeholder="Felhasználónév"
                   onkeypress="return logine(event);">
            <input class="login-page__input" type="password" id="password_log" placeholder="Jelszó"
                   onkeypress="return logine(event);">
            <a class="button-links" id="login" onclick="login();" href="#">
                <div class="login-page__button">Bejelentkezés</div>
            </a>
            <div class="clear"></div>
            <span class="message_css" id="message_log">_</span>
            <p class="login-page__text">Nincs fiokod? <a class="login-page__text-link" onclick="hide();" href="#">Regisztálj</a>
            </p>
        </form>
    </div>
    <?php
} else {
    include 'home.php';
}
?>
