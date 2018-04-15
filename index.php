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
          <li><div class="aktv" id="forms"><a class="nkij">Bejelenzkezés</a></div></li>
        </ul>
      </div>
      <div id="content">
        <div id="in-content">
        </div>
      </div>
    </div>
  </body>
</html>