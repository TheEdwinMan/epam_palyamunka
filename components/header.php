<div id="logo">
    <img id="kep" src="img/logo.png">
</div>
<?php
if (!isset($_SESSION['username'])):{
    ?>
    <ul class="cssmenu">
        <li>
            <a class="mbutt" href="index.php?page=leiras" id="leiras"><div>Leírás</div></a>
        </li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li>
            <a class="mbutt" href="index.php?page=login" id="login"><div>Bejelenzkezés</div></a>
        </li>
    </ul>
<?php } else:{ ?>
    <ul class="cssmenu">
        <li>
            <a class="mbutt" href="index.php?page=home" id="home"><div>Kezdőlap</div></a>
        </li>
        <li>
            <a class="mbutt" href="index.php?page=chat" id="chat"><div>Chat</div></a>
        </li>
        <li>
            <a class="mbutt" href="index.php?page=settings" id="settings"><div>Beállítások</div></a>
        </li>
        <li>
            <a class="mbutt" href="index.php?page=calc" id="calc"><div>Számológép</div></a>
        </li>
        <li><a href=""></a></li>
        <li>
            <a class="mbutt" href="#" id="logout" onclick="lout()"><div>Kijelentkezés</div></a>
        </li>
    </ul>
<?php }
endif; ?>