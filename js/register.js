function regis() {
    var uname = $('#username').val();
    var pword = $('#password').val();
    var pword2 = $('#password2').val();
    if (uname == '' || pword == '' || pword2 == '') {
        $('#error_message').html('');
        $("#error_message").animate({opacity: 1});
        $('#error_message').html("Semmi sem maradhat üres!");
        setTimeout(function () {
            $('#error_message').animate({opacity: 0});
        }, 2000);
    }
    else {
        if (pword != pword2) {
            $('#error_message').html('');
            $("#error_message").animate({opacity: 1});
            $('#error_message').html("A jelszavak nem egyeznek!");
            setTimeout(function () {
                $('#error_message').animate({opacity: 0});
            }, 2000);

        }
        else {
            $.ajax({
                url: "php/register.php",
                method: "POST",
                data: {uname: uname, pword: pword},
                success: function (data) {
                    if (data) {
                        $('#error_message').html('');
                        $("#error_message").animate({opacity: 1});
                        $('#error_message').html("Ez a felhasználónév már létezik, válassz másikat.");
                        setTimeout(function () {
                            $('#error_message').animate({opacity: 0});
                        }, 3000);
                    }
                    else {
                        document.getElementById('loginform').style.display = 'block';
                        document.getElementById('register').style.display = 'none';
                        $('#message_log').html('');
                        $("#error_message").animate({opacity: 1});
                        $("form").trigger("reset");
                        $('#message_log').html("Sikeresen regisztáltál. Jelentkezz be!");
                        setTimeout(function () {
                            $('#message_log').animate({opacity: 0});
                        }, 3000);
                    }
                }
            });
        }
    }
}

function regise(e) {
    if (e.keyCode == 13) {
        var uname = $('#username').val();
        var pword = $('#password').val();
        var pword2 = $('#password2').val();
        if (uname == '' || pword == '' || pword2 == '') {
            $('#error_message').html('');
            $("#error_message").animate({opacity: 1});
            $('#error_message').html("Semmi sem maradhat üres!");
            setTimeout(function () {
                $('#error_message').animate({opacity: 0});
            }, 2000);
        }
        else {
            if (pword != pword2) {
                $('#error_message').html('');
                $("#error_message").animate({opacity: 1});
                $('#error_message').html("A jelszavak nem egyeznek!");
                setTimeout(function () {
                    $('#error_message').animate({opacity: 0});
                }, 2000);
            }
            else {
                $.ajax({
                    url: "php/register.php",
                    method: "POST",
                    data: {uname: uname, pword: pword},
                    success: function (data) {
                        if (data) {
                            $('#error_message').html('');
                            $("#error_message").animate({opacity: 1});
                            $('#error_message').html("Ez a felhasználónév már létezik, válassz másikat.");
                            setTimeout(function () {
                                $('#error_message').animate({opacity: 0});
                            }, 3000);
                        }
                        else {
                            document.getElementById('loginform').style.display = 'block';
                            document.getElementById('register').style.display = 'none';
                            $('#message_log').html('');
                            $("#error_message").animate({opacity: 1});
                            $("form").trigger("reset");
                            $('#message_log').html("Sikeresen regisztáltál. Jelentkezz be!");
                            setTimeout(function () {
                                $('#message_log').animate({opacity: 0});
                            }, 3000);
                        }
                    }
                });
            }
        }
        return false;
    }
}