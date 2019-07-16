<html>
<head>
<title>input</title>
<?php 
$cidades=array('Escolha a cidade...',
		'Caucaia',
		'Juazeiro do Norte',
		'Maracanaú',
		'Sobral',
		'Crato',
		'Itapipoca',
		'Maranguape',
		'Iguatu',
		'Quixadá',
		'Pacajus',
		'Boa Viagem',
		'Viçosa do Ceará',
		'Guaramiranga',
		'Fortaleza',
		'Monsenhor Tabosa',
		'Canindé',
		'Madalena',
		'Pedra Branca',
		'Quixeramobim',
		'Independência',
		'Nova Russas',
		'Ubajara',
		'Russas',
		'Pacotí',
		'Palmácia',
		'Caucaia',
		'Parambu',
		'Redenção');
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

