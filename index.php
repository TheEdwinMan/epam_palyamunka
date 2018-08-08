<!DOCTYPE html>
<html>
<head>
    <?php
    include 'config/config.php';
    include 'components/head.php';
    ?>
</head>
<body>
<div id="space">
    <div id="Menu">
        <?php
        include 'components/header.php';
        ?>
    </div>
    <div id="content">
        <div id="in-content">
            <?php
            include 'components/pages.php';
            ?>
        </div>
    </div>
</div>
<?php
include 'components/nevlec.php';
?>
</body>
</html>