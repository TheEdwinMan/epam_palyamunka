function leiras() {
    $.ajax({
        url: 'leiras.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function log() {
    $.ajax({
        url: 'login.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function home() {
    $.ajax({
        url: 'home.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function chat() {
    $.ajax({
        url: 'chat.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function stg() {
    $.ajax({
        url: 'settings.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function cal() {
    $.ajax({
        url: 'calc.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}