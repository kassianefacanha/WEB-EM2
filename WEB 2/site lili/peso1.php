<html>
<head>
<title>input</title>
</head>
<body>
<center>
<h3>MAIOR PESO</h3></center>
<center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
<label>Digite o primeiro peso:</label><br>
<input type="text" id="nome" name="peso1"><br>
<label>Digite segundo peso:</label><br>
<input type="text" id="nome" name="peso2"><br>
<label>Digite o terceiro peso:</label><br>
<input type="text" id="nome" name="peso3"><br>
<input type="submit" value="ENVIAR" name="enviar">

<?php
$peso01 = $_POST['peso1'];
echo '<br> Seu peso 1 :<br>', $peso01 ,'</br>';
$peso02 = $_POST['peso2'];
echo '<br> Seu peso 2 :<br>', $peso02 ,'</br>';
$peso03 = $_POST['peso3'];
echo '<br> Seu peso 3 :<br>', $peso03 ,'</br>';
if ($peso01 > $peso02 && $peso01 > $peso03){
$maior = $_POST['peso1'];
}
else if ($peso02 > $peso01 && $peso02 > $peso03){
$maior = $_POST['peso2'];
}
else  if ($peso03 > $peso01 && $peso03 > $peso02){

$maior = $_POST['peso3'];
}

?>
<label>Maior peso é:</label><br>
<input type="text" name="resultado" readonly="true" value="<?php echo $maior; ?> "> 
</form>
</body>
</html>
