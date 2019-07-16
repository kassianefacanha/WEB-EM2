<?php 

$_arq['pasta'] = 'upload/';
$_arq['tamanho'] = 1024 * 1024 * 2;
$_arq['extensoes'] = array ('jpg','png','gif');
$_arq['renomeia'] = false;
$_arq['erros'][0] = 'Não houve erro';
$_arq['erros'][1] = 'O arquivo do upload é maior que o limite do php';
$_arq['erros'][2] = 'O arquivo ultrapassa  o limite do tamanho especificado no html';
$_arq['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_arq['erros'][4] = 'Não foi feito o upload do arquivo';

if ($_FILES['arquivo']['error'] !=0 ){
		die ("Não foi possivel fazer o upload,erro:<br />" . $_arq['erros'][$_FILES['arquivo']['erros']]);

exit;
}

$extensao = strtolower(end(explode('.',$_FILES['arquivo']['name'])));
if (array_search($extensao, $_arq ['extensoes']) === false) {
	echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
}
else if ($_arq['tamanho']<$_FILES['arquivo']['size']){
	echo "O arquivo enviado é muito grande, envie arquivos de até 2mb.";
}
else 
	if($_arq['renomeia'] == true){
		$nome_final = time() .'.jpg';
	} else {
		$nome_final = $_FILES['arquivo']['name'];
	}
	
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_arq['pasta'] . $nome_final)) {
		echo"Upload feito com sucesso!";
		echo '<br /><a href="upload/"' .$_arq['pasta'] .$nome_final .'">Clique aqui para acessar o arquivo</a>';
		} else{
			echo"Não foi possivel enviar o arquivo, tente novamente";
		}
		
?> 