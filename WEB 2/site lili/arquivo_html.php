<html>
<head><title>Exer1</title></head>
<body>
<form name="form" method="post">
<h3>ESCREVA O TEXTO DO SEU ARTIGO</h3>
<P></P>
<textarea name="texto" rowns="20" cols="60"></textarea>
<p></p>
<input type="submit" value="salvar" onclick="<?php salvarArquivo()?>"/>
<?php
function salvarArquivo () {
	$txt = $_POST ['texto'];
	$arquivo = fopen ('meuartigo.html', 'w+');
	
	if (isset ($_POST['texto'])) {
		if (!fwrite ($arquivo, $txt))
	die ('não foi possivel atualizar o arquivo.');
	
	
	fclose($arquivo);
	
	
	}//Fim do IF
}//Fim da função
?>

</form>
</body>
</html>