function lout() {
    $.ajax({
        url: "php/logout.php",
        method: "POST",
        success: function (data) {
            if (data) {
                $("body").load("index.php").hide().show();
            }
        }
    });
}