<html>
<head>
<title>input</title>

<?php 
$est_civil = array ( 
'solteiro '=> array('id'=>'20'),
'casado '=> array('id'=>'10'),
'separado'=> array('id'=>'30'),
'divorciado '=> array('id'=>'34'),
'viúvo'=> array('id'=>'50'),
);
?>
</head>
<body>
<center>
<form name="form_radio" method="post" action="radio1.php">
<label> nome</label><input type="text" name="nome"/>
<p></p>
<label>Estado civil</label>
<p></p>

<?php 
foreach ($est_civil as $value => $id_chave){
	echo '<p></p>';
	?>
	<input type= "radio" name="radioEstC[]" value="
	<?php foreach ($id_chave as $id => $vl){
		echo $vl;
		 
	?>"/>
<label><?php  echo  $value; ?></label>
<?php 
}
}

?>
<p></p>
<input type="submit" value="enviar" name="enviar" />

</form>
<h1>Resultado Estado Civil</h1>
<a>Código Estado Civil:</a>
<?php 

$idRadio = $_POST ['radioEstC'];
$nomeresult =$_POST['nome'];
foreach ($idRadio as $valor){
	echo $valor;
}
echo '<p></p>Nome:',$nomeresult;	



?>




</center>
</body>
</html>

