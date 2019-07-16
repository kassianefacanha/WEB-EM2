<html>
<head>
<title>Agenda-Inserir</title>
</head>
<body>
<h1>Sistema de Agenda - Editar Contatos</h1>
<?php 

$id = $_GET['id'];
$conexao = mysql_connect("localhost", "root","");
if (!$conexao){
	die("não foi possivel conectar".mysql_error());
}
mysql_select_db("agenda");
$resultado = mysql_query("select * from contatos where id = '$id'");
while ($vetor = mysql_fetch_array($resultado)){
	$id       = $vetor['id'];
	$nome     = $vetor['nome'];
	$telefone = $vetor['telefone'];
	$email    = $vetor['email'];
	$endereco = $vetor['endereco'];
	$cep      = $vetor['cep'];
}


?>

<form action="contatos_editar.php" method="get">
<fieldset>
<legend>Inserir Contatos</legend><br>
<br>
<label for="nome">Nome:</label><br>
<input type="text" name="nome" id ="nome" value=" <?php echo $nome; ?> "><br>
<br>
<label for="telefone">Telefone:</label><br>
<input type="text" name="telefone" id ="telefone" value="<?php echo $telefone; ?>"><br>
<br>
<label for="email">Email:</label><br>
<input type="text" name="email" id ="email" value = "<?php echo $email; ?>" ><br>
<br>
<label for="endereco">Endereço:</label><br>
<input type="text" name="endereco" id ="endereco" value="<?php echo $endereco; ?>"><br>
<br>
<label for="cep">CEP:</label><br>
<input type="text" name="cep"id ="cep" value="<?php echo $cep; ?>"><br>
<br>
<input type="hidden" name="validador" VALUE="1">
<input type="hidden" name="id" VALUE="<?php  echo $id; ?>">
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

$id = $_GET['id'];
$nome =  $_GET['nome'];
$telefone =  $_GET['telefone'];
$email =  $_GET['email'];
$endereco =  $_GET['endereco'];
$cep =  $_GET['cep'];

$resultado = mysql_query("update contato set nome = '$nome',
telefone = '$telefone', email = '$email', endereco = '$endereco',cep = '$cep', where id = '$id'");

if ($resultado) {
	echo "<script>";
		echo "alert('Editado com sucesso');";
		echo "location.href='agenda.php'";
	echo "</script>";	}
else 
 {
	echo "<script>";
		echo "alert('Erro ao editar');";
		echo "location.href='agenda.php'";
	echo "</script>";	}
   mysql_close($conexao);
}


?>
</body>
</html>


