<html>
<head>
<title>input</title>
</head>
<body>
<center><h1><font color="white">Cadastro PHP</font></h1></center>

<form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">

<?php 
$materias[1]="Matem�tica;<br>";
$materias[2]="Portugu�s;<br>";
$materias[3]="Historia;<br>";
$materias[4]="Geografia<br>";
$materias[5]="Inform�tica Basica;<br>";
$materias[6]="POO II;<br>";
$materias[7]="Banco de Dados;<br>";
$materias[8]="F�sica;<br>";
$materias[9]="Qu�mica;<br>";

?>
<center><h1><font color="black">Lista de Prefer�ncias</font></h1></center>
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

</body>
</html>

