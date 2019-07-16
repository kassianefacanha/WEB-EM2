<html>
<head>
<title>input</title>
</head>
<body>
<center>
<form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
<label>Digite seu nome:</label>
<input type="text" name="tx_nome" value="">
<input type="submit" value="ENVIAR" name="enviar">
<?php 
$qtde_lista = $_POST['tx_nome'];
echo '<br>Seus nome:',$qtde_lista,'<br>;'
?>
</form>
</center>
</body>
</html>
