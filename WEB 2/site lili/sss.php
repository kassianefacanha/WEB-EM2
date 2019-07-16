<html>
<head><title>Letras maisculas!!</title>
</head>
<body>  
<form name="form" method="post">
Texto <input type="text" name="tx" value="" />
<select name="lista_convert">
<option value="mai">Maiuscula</option>
<option value="min">Minuscula</option>
</select>
<p></p>
<input type="submit" value="Converter" />
</form>
<?php 
$vlr = $_POST['lista_convert'];
$texto = $_POST['tx'];

converter($vlr, $texto);

function converter($valor, $txt) {
     if ($valor == "mai"){
         echo $tx = strtoupper($txt);
         }ELSE
         echo $tx = strtolower($txt);
         }
?>

</body>
</html>