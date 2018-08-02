var cont = ""; //az egyenlet
var szam = 0; //az éppen aktiv gombnak az értéke
var csere = 0; //egyenlőség utáni szám cserére szolgál
var pontcount = 0; //contban szereplő műveletjelek száma

function addtofield() { //input text frissitése
    document.getElementById("field").value = cont;
}

function del() {// egész cont törlése
    document.getElementById("spa").textContent = "";
    cont = "";
    addtofield();
    csere = 0;
    pontcount = 0;
}

var clicked = false; //amig nyomva tartod a gombot és áthuzod a kurzort egy másik gombra akkor ne legyen addig hover
$(document).on('mousedown', 'a div', function () {
    $("a .calcbutton").removeClass('calcbutton').addClass('calcbuttonho');
    $("a .muv").removeClass('muv').addClass('muvho');
    clicked = true;
});

$(document).on('mouseup', function () {
    if (clicked) {
        clicked = false;
        $('.calcbuttonho').removeClass('calcbuttonho').addClass('calcbutton');
        $('.muvho').removeClass('muvho').addClass('muv');
    }
});

function send(me) { //gomb funkciók
    document.querySelectorAll("a").ondragstart = function () {
        return false;
    }; //ne lehessen áthuzni a hivatkozást
    szam = me.getAttribute('value'); //itt kap értéket a szám

    if (Number.isInteger(parseInt(szam))) { //számok bevitele
        if (csere == "1") {
            cont = "";
            document.getElementById("spa").textContent = "";
            addtofield();
            csere = 0;
        }
        if (szam != "0") {
            if (cont.slice(-1) == "0" && cont.slice(cont.length - 2, -1) != "." && isNaN(cont.slice(cont.length - 2, -1)) || cont.length == 1 && cont.slice(-1) == "0") { //ha az utolsó karakter "0" és az utolsó előtti karakter nem szám és nem "." vagyis műveletijel vagy ha az egyenlet "1" karakter hosszú és az "0" akkor vihetőek be 1-9ig a számok
                cont = cont.substring(0, cont.length - 1);
                addtofield();
            }
            cont = cont + szam;
            addtofield();
        }
        if (szam == "0") {
            if (cont.slice(-1) == "0" && cont.slice(cont.length - 2, -1) != "." && isNaN(cont.slice(cont.length - 2, -1)) || cont.length == 1 && cont.slice(-1) == "0") {
            } //hogy ne ismétlődjön a nulla
            else {
                cont = cont + szam;
                addtofield();
            }
        }

    }
    else if (szam == "=" && Number.isInteger(parseInt(cont.slice(-1)))) { //egyenlőség gomb
        document.getElementById("spa").textContent = cont;
        cont = cont.replace(/x/g, "*"); //az x-et lecseréli *-ra hogy az eval fügvény tudja értelmezni
        cont = String(eval(cont) * 10 / 10);
        if (String(cont).indexOf('.') > -1 && (cont.length - 1) - cont.indexOf('.') > 8) { //max 10 szám a tizedes vessző után
            cont = String(parseFloat(cont).toFixed(8));
        }
        pontcount = 0;
        addtofield();
        csere = 1;
    }
    else if (szam == "c" && cont != "") { //törlés gomb
        if (cont.length == 1) {
            document.getElementById("spa").textContent = ""; //ha az utolsó kraktert törlöd az egyenletből akkor a span is resetelődik
        }
        if (Number.isInteger(parseInt(cont.slice(-1))) === false && cont.slice(-1) != ".") { //műveleti jelek törlése
            if (cont.length != 1 && cont.slice(-1) != "-" || Number.isInteger(parseInt(cont.slice(cont.length - 2, -1))) === false && cont.slice(-1) != "-") {
                if (pontcount == 0) { //ha az első karakter - akkor a pontcount nem lesz 1
                    pontcount = 1;
                }
            }
        }
        if (cont.slice(-1) == ".") {
            pontcount = 0;
        }
        cont = cont.substring(0, cont.length - 1); // maga a törlési mechanizmus
        addtofield();
        csere = 0;
    }
    else if (isNaN(szam) && szam != "c" && cont.length > 0 && Number.isInteger(parseInt(cont.slice(-1))) || szam == "-" && cont.slice(-1) != "-") { //nem számok bevitele és cont kezdődhet "-"szal
        if (cont.length < 2 && szam == "-" || cont.slice(-1) != "." && szam == "-" && Number.isInteger(parseInt(cont.slice(-1))) === false) {
            cont = cont + szam;
            addtofield();
            csere = 0;
        }
        else if (szam != "." && cont.slice(-1) != ".") {//műveleti jelek bevitele
            cont = cont + szam;
            addtofield();
            csere = 0;
            pontcount = 0;
        }
        if (szam == ".") {//pont bevitele
            if (pontcount == 1) {
            } //ha a pontcount 1 akkor nem visz be pontot
            else {
                cont = cont + szam;
                addtofield();
                csere = 0;
                pontcount = 1;
            }
        }
    }
    else if (cont.length != 1 && szam != "=" && cont.length > 0 || szam == "-") { //műveletjelek cserélése
        if (szam == "." && String(cont).indexOf('.') > -1) {
        } //pontot ne cseréljen le műveletijelre
        else {
            if (cont.slice(-1) != "." && Number.isInteger(parseInt(cont.slice(cont.length - 2, -1)))) { // nem pont és ha az utolsó két karakter művelet jel akkor nem cserél, azért kell mert vannak negativ számok
                cont = cont.substring(0, cont.length - 1) + szam;//mechanizmus
                addtofield();
                csere = 0;
            }
        }
    }
}