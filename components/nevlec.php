<?php
if (!isset($_SESSION['username'])):{
} ?>
<?php else:{ ?>
    <div id="nev">
        Felhasználónév: <br>
        <b><span id="f"><?php echo $_SESSION['username']; ?></span></b>
    </div>
    <?php
}
endif; ?>