<?php
if (!isset($_SESSION['username'])) {
    ?>
    <div class="login-page">
        <div class="form">
            <form id="register">
                <input type="text" id="username" placeholder="Felhasználónév" onkeypress="return regise(event);">
                <input type="password" id="password" placeholder="Jelszó" onkeypress="return regise(event);">
                <input type="password" id="password2" placeholder="Jelszó megerősítése"
                       onkeypress="return regise(event);">
                <a class="mbutt" href="#" id="regis" onclick="regis();">
                    <div class="button">Regisztrálás</div>
                </a>
                <div class="clear"></div>
                <span class="message_css" id="error_message">_</span>
                <p class="message">Már regisztráltál? <a onclick="hide();" href="#">Jelentkezz be</a></p>
            </form>
            <form id="loginform">
                <input type="text" id="username_log" placeholder="Felhasználónév" onkeypress="return logine(event);">
                <input type="password" id="password_log" placeholder="Jelszó" onkeypress="return logine(event);">
                <a class="mbutt" id="login" onclick="login();" href="#">
                    <div class="button">Bejelentkezés</div>
                </a>
                <div class="clear"></div>
                <span class="message_css" id="message_log">_</span>
                <p class="message">Nincs fiokod? <a onclick="hide();" href="#">Regisztálj</a></p>
            </form>
        </div>
    </div>
    <?php
} else {
    include 'home.php';
}
?>
