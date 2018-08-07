<div id="logo">
    <img id="kep" src="img/logo.png">
</div>
<?php
if (!isset($_SESSION['username'])):{
    ?>
    <ul class="cssmenu">
        <li>
            <a class="mbutt" href="#" id="leiras" onclick="leiras()"><div>Leírás</div></a>
        </li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li>
            <a class="mbutt" href="#" id="login" onclick="log()"><div>Bejelenzkezés</div></a>
        </li>
    </ul>
<?php } else:{ ?>
    <ul class="cssmenu">
        <li>
            <a class="mbutt" href="#" id="home" onclick="home()"><div>Kezdőlap</div></a>
        </li>
        <li>
            <a class="mbutt" href="#" id="chat" onclick="chat()"><div>Chat</div></a>
        </li>
        <li>
            <a class="mbutt" href="#" id="settings" onclick="stg()"><div>Beállítások</div></a>
        </li>
        <li>
            <a class="mbutt" href="#" id="calc" onclick="cal()"><div>Számológép</div></a>
        </li>
        <li><a href=""></a></li>
        <li>
            <a class="mbutt" href="#" href="#" id="logout" onclick="lout()"><div>Kijelentkezés</div></a>
        </li>
    </ul>
<?php }
endif; ?>