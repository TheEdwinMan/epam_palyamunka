<?php
if (!isset($_SESSION['username'])):{
} ?>
<?php else:{ ?>
    <div class="nev">
        Felhasználónév: <br>
        <b><span><?php echo $_SESSION['username']; ?></span></b>
    </div>
    <?php
}
endif; ?>