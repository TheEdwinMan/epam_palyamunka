<?php
if (isset($_SESSION['username'])):{
    ?>
    <h2>Jelszó megváltoztatása:</h2>
    <div class="content__settings-input">
        <form>
            <div>
                <input class="content__settings-input--look" type="text" id="password" placeholder="Jelszó" onkeypress="return ujjelszoe(event);">
                <input class="content__settings-input--look" type="text" id="password2" placeholder="Jelszó megerősítése"
                       onkeypress="return ujjelszoe(event);">
                <div class="content__settings-button" href="#" id="ujjel" onclick="ujjelszo();"><a class="nkij">Enter</a></div>
            </div>
        </form>
    </div>
    <div class="clear"></div>
    <span class="content__alert-message content__alert-message--settings" id="error_ujjel"></span>
    <span class="content__alert-message content__alert-message--settings" id="success_uj"></span>
    <h2 style="margin-top: 20px">Felhasználónév megváltoztatása:</h2>
    <div class="content__settings-input">
        <form>
            <div>
                <input class="content__settings-input--look" type="text" id="username" placeholder="Felhasználónév" onkeypress="return ujfneve(event);">
                <div class="content__settings-button" href="#" id="ujnev" onclick="ujfnev();"><a class="nkij">Enter</a></div>
            </div>
        </form>
    </div>
    <div class="clear"></div>
    <span class="content__alert-message content__alert-message--settings" id="error_ujnev"></span>
    <span class="content__alert-message content__alert-message--settings" id="success_ujnev"></span>
    <h2 style="margin-top: 20px">Felhasználó törlése:</h2>
    <form>
        <div class="content__settings-input">
            <div class="content__settings-button" href="#" id="torl" onclick="torles();"><a class="nkij">Törlés</a></div>
        </div>
    </form>
    <div class="clear"></div>
    <span class="content__alert-message content__alert-message--settings" id="error_torl"></span>
    <?php
} else:{
    include 'pages/leiras.php';
}
endif;
?>