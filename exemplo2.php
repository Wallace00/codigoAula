
<style>
div{
margin:0;
	height: 40px; /*altura*/
	/*border: 1px solid silver;*/
}
.nota{
	width: 50px;/*largura*/
}
label{
	font-weight: bold;/*negrito*/
}
</style>
<form action="controleNota.php" method="get">
	<div>
		<label>Ano</label> 
		<input type="text" name="ano">
	</div>
	<div>
		<label>Aluno</label>
		<input type="text" name="aluno">
	</div>
	<div>
		<div>
			<label>Nota 1</label> 
			<input class="nota" type="text" name="n1">
		</div>
		<div>
			<label>Nota 2</label> 
			<input class="nota" type="text" name="n2">
		</div>
		<div>
			<label>Nota 3</label> 
			<input class="nota" type="text" name="n3">
		</div>
		<div>
			<label>Nota 4</label> 
			<input class="nota" type="text" name="n4">
		</div>
	</div><br><br><br><br><br><br><br>
	<div>		
		<input type="submit" value="CALCULAR">	
		<input type="reset" value="Limpar">
	</div>		
</form>