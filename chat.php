<script type="text/javascript" src="js/chat.js"></script>
<div id="kozep">
    <div class="chat">
        <div id="uzenetek">
        </div>
        <form name="form1" style="color: white;">
            <div class="send">
                <textarea name="msg" id="msg" placeholder="Üzenet" onkeypress="return submitChate(event);"></textarea>
            </div>
            <div id="chat-gomb" href="#" onclick="submitChat();"><a>Enter</a></div>
            <br>
        </form>
    </div>
</div>
