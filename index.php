<!DOCTYPE html>
<html>
<head>
    <?php
    include 'components/head.php'
    ?>
</head>
<body>
<div id="space">
    <div id="Menu">
        <?php
        include 'components/header.php'
        ?>
    </div>
    <div id="content">
        <div id="in-content">
            <?php
            if (!isset($_SESSION['username'])):{
                include 'pages/leiras.php';
            } else:{
                include 'pages/home.php';
            }
            endif;
            ?>
        </div>
    </div>
</div>
<?php
include 'components/nevlec.php'
?>
</body>
</html>