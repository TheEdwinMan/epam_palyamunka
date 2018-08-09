<!DOCTYPE html>
<html>
<head>
    <?php
    include 'config/config.php';
    include 'components/head.php';
    ?>
</head>
<body>
<div class="space">
    <div class="menu">
        <?php
        include 'components/header.php';
        ?>
    </div>
    <div class="space__content">
        <div class="space__content__in-content">
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