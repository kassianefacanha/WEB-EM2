<html>
<head>
<title>CADASTRO PHP</title>
<style type="text/css">

#list{
background:white;
height: 90%;
width:70%;
float:left;
}
#notas{
background:yellow;
height: 90%;
width:29%;
float:right;
}



</style>

</head>
<body bgcolor="blue">
<center><h1><font color="white">Cadastro PHP</font></h1></center>
<div id="list">
<form action="exe03.php" method="post">

<?php 
$materias[1]="Matemática;<br>";
$materias[2]="Português;<br>";
$materias[3]="Historia;<br>";
$materias[4]="Geografia<br>";
$materias[5]="Informática Basica;<br>";
$materias[6]="POO II;<br>";
$materias[7]="Banco de Dados;<br>";
$materias[7]="Física;<br>";
$materias[7]="Química;<br>";

?>
<center><h1><font color="black">Lista de Preferências</font></h1></center>
<ul><li>Marque as Diciplinas que Queira se Matricular</li></ul>
<?php foreach ($materias as $value){
?>
<input type="checkbox" name="prefe[]" value= "<?php echo $value;  ?> ">
<label><?php echo $value ;?></label>
<?php 
}
?>
<input type="submit" value="Enviar" name="enviar">

<center><h1><font color="black">Materias Preferidas</font></h1></center>
<?php 
$lista_mate = $_POST['prefe'];
foreach ($lista_mate as $value){
	echo "<p></p>" , $value;
	
}

?>
</form>



</div>

<div id="notas">
<center><h1><font color="black">Informe as Notas</font></h1></center>
<form action="exe03.php" method="post">
<table>
<tr>
<td>Nota 01:</td>
<td><input type="text" name="not01" ></td>
</tr>
<tr>
<td>Nota 02:</td>
<td><input type="text" name="not02"></td>
</tr>
<tr>
<td>Nota 03:</td>
<td><input type="text" name="not03"></td>
</tr>
<tr>
<td><input type="submit" value="Enviar"></td>
</tr>

<tr>
<td>Maior Nota:</td>
<td><?php 
$nota01 = $_POST['not01'];
$nota02 = $_POST['not02'];
$nota03 = $_POST['not03'];
if (($nota01 > $nota02) && ($nota01 > $nota03)){
	$maior_not = $nota01;
}
if (($nota02 > $nota01) && ($nota02 > $nota03)){
	$maior_not = $nota02;
}
if (($nota03 > $nota01) && ($nota03 > $nota02)){
	$maior_not = $nota03;
}


?>
<input type="text" name="resutado" readonly="true" value= "<?php  echo $maior_not ;?> "/>
</td>
</tr>

</table>
</form>
</div>



</body>
</html>
<?php
