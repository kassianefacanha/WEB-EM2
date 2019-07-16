<html>
<head>
<title></title>
<?php 
$cidade=array('caucaia',
'sobral',
'crato',
'itapipoca',
'quixada');

?>
<link rel="stylesheet" type="text/css" href="recebe.css">
</head>
<body>
<p> Cidade que você pode visita!</p>

<div id="menu">
<center>
<a href="#">home</a>
<a href="#">cadastro</a>
<a href="#">home</a>
</center>
</div>

<div id="center">


<form  name="select_1_2" method="post" action="visita_cidade.php">
<font color="white">Escilha uma cidade para visita</font>
<select name="lista_cidade[]">
<?php  foreach ($cidade as $valor) { ?>
<option value="<?php echo $valor; ?>"> <?php echo $valor; ?></option>
<?php } ?>
</select>
<input type="submit" value="visita"/>




</form>
</div>
</body>
</html>