<?php
$cur = "";
if (isset($_GET['page']) && !isset($_SESSION['username'])):{
    $p = $_GET['page'];
    $page = "pages/out/" . $p . ".php";
    if (file_exists($page)):{
        include($page);
        $cur = $p;
    } else:{
        echo "404";
    }
    endif;
} elseif (!isset($_GET['page']) && !isset($_SESSION['username'])):{
    include 'pages/out/leiras.php';
    $cur = "leiras";
}
endif;
if (isset($_GET['page']) && isset($_SESSION['username'])):{
    $p = $_GET['page'];
    $page = "pages/in/" . $p . ".php";
    if (file_exists($page)):{
        include($page);
        $cur = $p;
    } else:{
        echo "404";
    }
    endif;
} elseif (!isset($_GET['page']) && isset($_SESSION['username'])):{
    include 'pages/in/home.php';
    $cur = "home";
}
endif;
?>
<script>
    $(document).ready(function () {
        var oldal = "<?php echo $cur; ?>";
        $.ajax({
            url: "php/current.php",
            method: "POST",
            data: {oldal: oldal},
            success: function (data) {
                if (data) {
                    oldal = data;
                    console.log(oldal);
                    var tab = document.getElementById(data);
                    tab.classList.remove("mbutt");
                    tab.classList.add("mbuttoff");
                    tab.removeAttribute("href");
                }
                else {
                }
            }
        });
    });
</script>