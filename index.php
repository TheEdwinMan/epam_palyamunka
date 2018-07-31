<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style/styles.css">
	<link rel="stylesheet" href="style/calcstyles.css">
    <title>Epam feladat</title>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="js/logout.js"></script>
	<script src="js/buttons.js"></script>
  </head>
    <body>
    <div id="space">
      <div id="logo">
        <img id="kep" class="nkij" src="img/logo.png">
      </div>
      <div id="Menu">
        <ul class="cssmenu">
<?php
session_start();
if(!isset($_SESSION['username'])){
?>
          <li><div class="aktv" id="leiras" onclick="leiras()"><a class="nkij">Leírás</a></div></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li><div class="aktv" id="login" onclick="log()"><a class="nkij">Bejelenzkezés</a></div></li>
        </ul>
      </div>
      <div id="content">
        <div id="in-content">
		<?php
			include 'leiras.php'
        ?>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
	exit;
	}
?>
          <li><div class="aktv" id="home" onclick="home()"><a class="nkij">Kezdőlap</a></div></li>
          <li><div class="aktv" id="chat" onclick="chat()"><a class="nkij">Chat</a></div></li>
          <li><div class="aktv" id="settings" onclick="stg()"><a class="nkij">Beállítások</a></div></li>
          <li><div class="aktv" id="calc" onclick="cal()"><a class="nkij">Számológép</a></div></li>
          <li><a href=""></a></li>
          <li><div class="aktv" href="#" id="logout" onclick="lout()"><a class="nkij">Kijelentkezés</a></div></li>
        </ul>
      </div>
      <div id="content">
        <div id="in-content">
          <?php
          include 'home.php'
          ?>
        </div>
      </div>
    </div>
    <div id="nev">
      Felhasználónév: <br>
      <b><span id="f"><?php echo $_SESSION['username']; ?></span></b>
    </div>
  </body>
</html>
