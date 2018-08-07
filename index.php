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
            if (isset($_GET['page'])):{
                $p = $_GET['page'];
                $page = "pages/" . $p . ".php";
                if (file_exists($page)):{
                    include($page);
                } else:{
                    echo "nope";
                }
                endif;
            } else:{
                if (!isset($_SESSION['username'])):{
                    include 'pages/leiras.php';
                } else:{
                    include 'pages/home.php';
                }
                endif;
            }
            endif;
            ?>
        </div>
    </div>
</div>
<?php
include 'components/nevlec.php';
?>
</body>
</html>