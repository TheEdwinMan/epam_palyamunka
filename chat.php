<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
<script>
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
  xmlhttp.open('GET','insert.php?&msg='+msg,true);
  xmlhttp.send();
  document.getElementById('msg').value = '';
    $('#uzenetek').load('logs.php');
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
    xmlhttp.open('GET','insert.php?&msg='+msg,true);
    xmlhttp.send();
    document.getElementById('msg').value = '';
      $('#uzenetek').load('logs.php');
      setTimeout(function (){
        var d = $('#uzenetek');
        d.scrollTop(d.prop("scrollHeight"));
      }, 100);
      return false;
  }
}

$(document).ready(function(e){
$.ajaxSetup({cache:false});
  $('#uzenetek').load('logs.php');
  setTimeout(function (){
    $('#uzenetek').load('logs.php');
    var d = $('#uzenetek');
    d.scrollTop(d.prop("scrollHeight"));
  }, 10);
}
);

$(document).ready(function(e){
$.ajaxSetup({cache:false});
setInterval(function(){
  $('#uzenetek').load('logs.php');},100);
}
);
</script>
<div id="kozep">
  <div class="chat">
    <div id="uzenetek">
    </div>
    <form name="form1" style="color: white;">
      <div class="send">
        <textarea name="msg" id="msg" placeholder="Üzenet" onkeypress="return submitChate(event);"></textarea>
      </div>
      <div id="chat-gomb" href="#" onclick="submitChat();" ><a>Enter</a></div><br>
    </form>
  </div>
</div>
