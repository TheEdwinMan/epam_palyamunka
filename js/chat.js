function submitChat(){
  if(form1.msg.value == ''){
    alert("Az üzenet nem lehet üres!");
    return;
  }
  var msg = form1.msg.value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      document.getElementById('uzenetek').innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open('GET','php/insert.php?&msg='+msg,true);
  xmlhttp.send();
  document.getElementById('msg').value = '';
    $('#uzenetek').load('php/logs.php');
    setTimeout(function (){
      var d = $('#uzenetek');
      d.scrollTop(d.prop("scrollHeight"));
    }, 100);
}

function submitChate(e){
  if (e.keyCode == 13){
    if(form1.msg.value == ''){
      alert("Az üzenet nem lehet üres!");
      return;
    }
    var msg = form1.msg.value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
      if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
        document.getElementById('uzenetek').innerHTML = xmlhttp.responseText;
      }
    }
    xmlhttp.open('GET','php/insert.php?&msg='+msg,true);
    xmlhttp.send();
    document.getElementById('msg').value = '';
      $('#uzenetek').load('php/logs.php');
      setTimeout(function (){
        var d = $('#uzenetek');
        d.scrollTop(d.prop("scrollHeight"));
      }, 100);
      return false;
  }
}

$(document).ready(function(e){
$.ajaxSetup({cache:false});
  $('#uzenetek').load('php/logs.php');
  setTimeout(function (){
    $('#uzenetek').load('php/logs.php');
    var d = $('#uzenetek');
    d.scrollTop(d.prop("scrollHeight"));
  }, 100);
}
);

$(document).ready(function(e){
$.ajaxSetup({cache:false});
setInterval(function(){
  $('#uzenetek').load('php/logs.php');},100);
}
);