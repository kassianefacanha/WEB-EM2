<html>
<head>
<title>input</title>
<?php 
$cidades=array('Escolha a cidade...',
		'Caucaia',
		'Juazeiro do Norte',
		'Maracana�',
		'Sobral',
		'Crato',
		'Itapipoca',
		'Maranguape',
		'Iguatu',
		'Quixad�',
		'Pacajus',
		'Boa Viagem',
		'Vi�osa do Cear�',
		'Guaramiranga',
		'Fortaleza',
		'Monsenhor Tabosa',
		'Canind�',
		'Madalena',
		'Pedra Branca',
		'Quixeramobim',
		'Independ�ncia',
		'Nova Russas',
		'Ubajara',
		'Russas',
		'Pacot�',
		'Palm�cia',
		'Caucaia',
		'Parambu',
		'Reden��o');
?>
</head>
<body>
<center>

<form action="select1.php" method="post" name="f_cidades" >
Escolha uma cidade para visitar!!
<select name="lista_cidades[]">
<?php foreach ($cidades as $valor){ ?>
<option value="<?php echo $valor; ?>"> <?php echo $valor; ?></option>
<?php } ?>
</select>
<input type="submit" value="Visitar"/>
</form>
<?php
$cidade_vis = $_POST['lista_cidades'];
require 'select1.php';
foreach ($cidade_vis as $vl_cidade) {
	echo '<p></p>Obrigado por visitar ', $vl_cidade;
}

?>



</center>

</body>
</html>

