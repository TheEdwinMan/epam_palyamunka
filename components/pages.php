<?php
if (isset($_GET['page'])):{
    $p = $_GET['page'];
    $page = "pages/" . $p . ".php";
    if (file_exists($page)):{
        include($page);
    } else:{
        echo "404";
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