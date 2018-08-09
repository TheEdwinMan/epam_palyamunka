<div class="menu_logo-background">
    <img class="menu__img " src="img/logo.png">
</div>
<?php
if (!isset($_SESSION['username'])):{
    ?>
    <ul class="cssmenu">
        <li>
            <a class="button-links" href="index.php?page=leiras" id="leiras" onclick="highlight()"><div class="menu__button">Leírás</div></a>
        </li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li>
            <a class="button-links" href="index.php?page=login" id="login" onclick="highlight()"><div class="menu__button">Bejelenzkezés</div></a>
        </li>
    </ul>
<?php } else:{ ?>
    <ul class="cssmenu">
        <li>
            <a class="button-links" href="index.php?page=home" id="home" onclick="highlight()"><div class="menu__button">Kezdőlap</div></a>
        </li>
        <li>
            <a class="button-links" href="index.php?page=chat" id="chat" onclick="highlight()"><div class="menu__button">Chat</div></a>
        </li>
        <li>
            <a class="button-links" href="index.php?page=settings" id="settings" onclick="highlight()"><div class="menu__button">Beállítások</div></a>
        </li>
        <li>
            <a class="button-links" href="index.php?page=calc" id="calc" onclick="highlight()"><div class="menu__button">Számológép</div></a>
        </li>
        <li><a href=""></a></li>
        <li>
            <a class="button-links" href="#" id="logout" onclick="lout()" ><div class="menu__button">Kijelentkezés</div></a>
        </li>
    </ul>
<?php }
endif; ?>