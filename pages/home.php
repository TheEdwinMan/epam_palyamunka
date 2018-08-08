<?php
if (isset($_SESSION['username'])):{
    ?>
    <h1>Összefoglaló:</h1>
    <p>Az oldalon a létrehozott felhasználóval tudsz a "Chat" fülön beszélgetni más felhasználókkal. A "Beállítsok"
        fülön
        testre szabhatod a felhasznlódnak a nevét és jelszavát vagy akár törölheted is a fiokot.</p>
    <?php
} else:{
    include 'pages/leiras.php';
}
endif;
?>