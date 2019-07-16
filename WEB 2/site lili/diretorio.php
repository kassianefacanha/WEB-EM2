<html>
<?php
$arquivo = fopen('meutexto','w');
if ($arquivo == false)
	 die('Não foi possível ciar o arquivo.');
?>


<body>
<form action=""name="form"method="post">
Digite o nome do arquivo texto do seu artigo
<input type="text"name="nome_arq"value=""/>
<input type="submit"value="Criar arquivo"name="btn"onclick="<?php criar_arquivo()?>">


</form>
<?php 
function criar_arquivo(){
$nome_arq = $_POST['nome_arq'];

if (isset($_POST['nome_arq'])){
$arquivo = fopen($nome_arq.'.txt','w' );
}
if ($arquivo == false)
	die('Não foi possível criar o arquivo');
}
?>

</body>
</html>
