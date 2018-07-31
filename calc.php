		<script src="js/calc.js"></script>
		<div id="calculator">
			<div class="row">
				<div style="position: relative; display: inline-block; float: left;">
					<input type="text" name="numbers" id="field" readonly>
					<span id="spa" class="spaclass"></span>
				</div>
				<a href="#" onclick="send(this)" ondblclick="del()" value="c">
					<div class="muv" style="background: #414A53">
						<p>C</p>
					</div>
				</a>
			</div>
			<div class="szam">
				<a href="#" onclick="send(this)" value="7"><div class="calcbutton"><p>7</p></div></a>
				<a href="#" onclick="send(this)" value="8"><div class="calcbutton"><p>8</p></div></a>
				<a href="#" onclick="send(this)" value="9"><div class="calcbutton"><p>9</p></div></a>
				
				<a href="#" onclick="send(this)" value="4"><div class="calcbutton"><p>4</p></div></a>
				<a href="#" onclick="send(this)" value="5"><div class="calcbutton"><p>5</p></div></a>
				<a href="#" onclick="send(this)" value="6"><div class="calcbutton"><p>6</p></div></a>
				
				<a href="#" onclick="send(this)" value="1"><div class="calcbutton"><p>1</p></div></a>
				<a href="#" onclick="send(this)" value="2"><div class="calcbutton"><p>2</p></div></a>
				<a href="#" onclick="send(this)" value="3"><div class="calcbutton"><p>3</p></div></a>
				
				<a href="#" onclick="send(this)" value="0"><div class="calcbutton"><p>0</p></div></a>
				<a href="#" onclick="send(this)" value="."><div class="calcbutton"><p>.</p></div></a>
				<a href="#" onclick="send(this)" value="="><div class="calcbutton" style="background: "><p>=</p></div></a>
			</div>
			<div class="muvelet">
				<a href="#" onclick="send(this)" value="/"><div class="muv"><p>/</p></div></a>
				<a href="#" onclick="send(this)" value="x"><div class="muv"><p>x</p></div></a>
				<a href="#" onclick="send(this)" value="-"><div class="muv"><p>-</p></div></a>
				<a href="#" onclick="send(this)" value="+"><div class="muv"><p>+</p></div></a>
			</div>
			<div class="clear"></div>
		</div>

