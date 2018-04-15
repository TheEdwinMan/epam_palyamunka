<h2>Jelszó megváltoztatása:</h2>
<div class="input-tulajd">
  <form>
    <div>
      <input type="text" id="password" placeholder="Jelszó" onkeypress="return ujjelszoe(event);">
      <input type="text" id="password2" placeholder="Jelszó megerősítése" onkeypress="return ujjelszoe(event);">
      <div class="sttg-gomb" href="#" id="ujjel" onclick="ujjelszo();"><a class="nkij">Enter</a></div><br style="clear:both">
      <span class="spanszin" id="error_ujjel"></span>
      <span class="spanszin" id="success_uj"></span>
    </div>
  </form>

</div>
<h2>Felhasználónév megváltoztatása:</h2>
<div class="input-tulajd">
  <form>
    <div>
      <input type="text" id="username" placeholder="Felhasználónév" onkeypress="return ujfneve(event);">
      <div class="sttg-gomb" href="#" id="ujnev" onclick="ujfnev();"><a class="nkij">Enter</a></div><br style="clear:both">
      <span class="spanszin" id="error_ujnev"></span>
      <span class="spanszin" id="success_ujnev"></span>
    </div>
  </form>
</div>
<h2>Felhasználó törlése:</h2>
  <form>
    <div class="input-tulajd">
      <div class="sttg-gomb" href="#" id="torl" onclick="torles();"><a class="nkij">Törlés</a></div><br style="clear:both">
    </div>
  </form>
  <span class="spanszin" id="error_torl"></span>
