function leiras() {
    $.ajax({
        url: 'pages/leiras.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function log() {
    $.ajax({
        url: 'pages/login.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function home() {
    $.ajax({
        url: 'pages/home.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function chat() {
    $.ajax({
        url: 'pages/chat.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function stg() {
    $.ajax({
        url: 'pages/settings.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}

function cal() {
    $.ajax({
        url: 'pages/calc.php',
        success: function (data) {
            $('#in-content').html(data);
        }
    });
}