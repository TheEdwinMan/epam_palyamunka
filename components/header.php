<div id="logo">
    <img id="kep" class="nkij" src="img/logo.png">
</div>
<?php
if (!isset($_SESSION['username'])):{
    ?>
    <ul class="cssmenu">
        <li>
            <div class="aktv" id="leiras" onclick="leiras()"><a class="nkij">Leírás</a></div>
        </li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li>
            <div class="aktv" id="login" onclick="log()"><a class="nkij">Bejelenzkezés</a></div>
        </li>
    </ul>
<?php } else:{ ?>
    <ul class="cssmenu">
        <li>
            <div class="aktv" id="home" onclick="home()"><a class="nkij">Kezdőlap</a></div>
        </li>
        <li>
            <div class="aktv" id="chat" onclick="chat()"><a class="nkij">Chat</a></div>
        </li>
        <li>
            <div class="aktv" id="settings" onclick="stg()"><a class="nkij">Beállítások</a></div>
        </li>
        <li>
            <div class="aktv" id="calc" onclick="cal()"><a class="nkij">Számológép</a></div>
        </li>
        <li><a href=""></a></li>
        <li>
            <div class="aktv" href="#" id="logout" onclick="lout()"><a class="nkij">Kijelentkezés</a></div>
        </li>
    </ul>
<?php }
endif; ?>