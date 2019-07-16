<html>
<head>
<title>Agenda-Inserir</title>
</head>
<body>
<h1>Sistema de Agenda - Inserir Contatos</h1>
<form action="contatos_inserir.php" method="get">
<fieldset>
<legend>Inserir Contatos</legend><br>
<br>
<label for="nome">Nome:</label><br>
<input type="text" name="nome" id ="nome"><br>
<br>
<label for="telefone">Telefone:</label><br>
<input type="text" name="telefone" id ="telefone"><br>
<br>
<label for="email">Email:</label><br>
<input type="text" name="email" id ="email"><br>
<br>
<label for="endereco">Endereço:</label><br>
<input type="text" name="endereco" id ="endereco"><br>
<br>
<label for="cep">CEP:</label><br>
<input type="text" name="cep"id ="cep"><br>
<br>
<input type="hidden" name="validador" VALUE="1" >
<input type="button" value="Voltar" onclick="window.location.href = 'agenda.php'"><br>
<input type="reset" value="Limpar">
<input type="submit" value="OK">


</fieldset>
</form>

<?php 
if(isset($_GET['validador']) && ($_GET['validador'] == 1)){
	$conexao = mysql_connect("localhost", "root","");
if (!$conexao){
	die("não foi possivel conectar".mysql_error());
}else {
	echo"conexao realizada com sucesso";
	
}


mysql_select_db("agenda");

$nome =  $_GET['nome'];
$telefone =  $_GET['telefone'];
$email =  $_GET['email'];
$endereco =  $_GET['endereco'];
$cep =  $_GET['cep'];

$resultado = mysql_query("insert into contato(nome, telefone, email, endereco, cep) 
values('$nome','$telefone','$email','$endereco','$cep') ");

if ($resultado) {
	echo "<script>";
		echo "alert('Inserido com sucesso');";
		echo "location.href='agenda.php'";
	echo "</script>";	}
else 
 {
	echo "<script>";
		echo "alert('Erro ao Inserir');";
		echo "location.href='agenda.php'";
	echo "</script>";	}
   mysql_close($conexao);
}


?>
</body>
</html>


