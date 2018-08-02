function login() {
    var username = $('#username_log').val();
    var password = $('#password_log').val();
    if (username == '' || password == '') {
        $('#message_log').html('');
        $("#message_log").show();
        $('#message_log').html("Semmi sem maradhat üres!");
        setTimeout(function () {
            $('#message_log').fadeOut("Slow");
        }, 2000);
    }
    else {
        $.ajax({
            url: "php/belepes.php",
            method: "POST",
            data: {username: username, password: password},
            success: function (data) {
                if (data) {
                    $("body").load("index.php").hide().show();
                }
                else {
                    $('#message_log').html('');
                    $('#message_log').show().html("Hibás vagy nem létező bejelenzkezési adatok.");
                    setTimeout(function () {
                        $('#message_log').fadeOut("Slow");
                    }, 3000);
                }
            }
        });
    }
}

function logine(e) {
    if (e.keyCode == 13) {
        var username = $('#username_log').val();
        var password = $('#password_log').val();
        if (username == '' || password == '') {
            $('#message_log').html('');
            $("#message_log").show();
            $('#message_log').html("Semmi sem maradhat üres!");
            setTimeout(function () {
                $('#message_log').fadeOut("Slow");
            }, 2000);
        }
        else {
            $.ajax({
                url: "php/belepes.php",
                method: "POST",
                data: {username: username, password: password},
                success: function (data) {
                    if (data) {
                        $("body").load("index.php").hide().show();
                    }
                    else {
                        $('#message_log').html('');
                        $('#message_log').show().html("Hibás vagy nem létező bejelenzkezési adatok.");
                        setTimeout(function () {
                            $('#message_log').fadeOut("Slow");
                        }, 3000);
                    }
                }
            });
        }
        return false;
    }
}
