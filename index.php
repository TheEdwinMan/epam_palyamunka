<?php
session_start();
if(!isset($_SESSION['username'])){
?>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Epam feladat</title>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script>
    $(document).ready(function(){

         $('.aktv').mouseenter(function(){
           $(this).css("background-color", "blue");
          });
          $('.aktv').mouseleave(function(){
            $(this).css("background-color", "#303030");
           });

		 $('#leiras').click(function(){
           $.ajax({
             url: 'leiras.php',
             success: function(data) {
               $('#in-content').html(data);
             }
           });
         });

		 $('#login').click(function(){
           $.ajax({
             url: 'login.php',
             success: function(data) {
               $('#in-content').html(data);
             }
           });
         });

       });
  </script>
  </head>
  <body>
    <div id="space">
      <div id="logo">
        <img id="kep" class="nkij" src="logo.png">
      </div>
      <div id="Menu">
        <ul class="cssmenu">
          <li><div class="aktv" id="leiras"><a class="nkij">Leírás</a></div></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li><div class="aktv" id="login"><a class="nkij">Bejelenzkezés</a></div></li>
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
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Epam feladat</title>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script>
    $(document).ready(function(){

      $('#logout').click(function(){
        $.ajax({
          url:"logout.php",
          method:"POST",
          success:function(data){
            if(data){
              $("body").load("index.php").hide().show();
            }
          }
        });
      });

         $('.aktv').mouseenter(function(){
           $(this).css("background-color", "blue");
          });
          $('.aktv').mouseleave(function(){
            $(this).css("background-color", "#303030");
           });

		 $('#home').click(function(){
           $.ajax({
             url: 'home.php',
             success: function(data) {
               $('#in-content').html(data);
             }
           });
         });

		 $('#chat').click(function(){
           $.ajax({
             url: 'chat.php',
             success: function(data) {
               $('#in-content').html(data);
             }
           });
         });

      $('#settinh').click(function(){
            $.ajax({
              url: 'settings.php',
              success: function(data) {
                $('#in-content').html(data);
              }
            });
          });

      $('#ghub').click(function(){
        $.ajax({
          url: 'ghubt.php',
          success: function(data) {
            $('#in-content').html(data);
          }
        });
      });

       });
  </script>
  </head>
  <body>
    <div id="space">
      <div id="logo">
        <img id="kep" class="nkij" src="logo.png">
      </div>
      <div id="Menu">
        <ul class="cssmenu">
          <li><div class="aktv" id="home"><a class="nkij">Kezdőlap</a></div></li>
          <li><div class="aktv" id="chat"><a class="nkij">Chat</a></div></li>
          <li><div class="aktv" id="settings"><a class="nkij">Beállítások</a></div></li>
          <li><div class="aktv" id="ghub"><a class="nkij">Github</a></div></li>
          <li><a href=""></a></li>
          <li><div class="aktv" href="#" id="logout"><a class="nkij">Kijelentkezés</a></div></li>
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
    <div id="nev">
      Felhasználónév: <br>
      <b><span id="f"><?php echo $_SESSION['username']; ?></span></b>
    </div>
  </body>
</html>
