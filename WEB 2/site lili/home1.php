<html>
<head>
<title>CADASTRO PHP</title>
<body >




<table  bordercolor="white" border="5" width="100%">
<tr><td>

 <form method="post" action="home1.php">
 Valor= 500;
   <input type="checkbox" name="cinco_vezes" value="5">
   5x
    <input type="checkbox" name="oito_vezes" value="8">
   8x
    <input type="checkbox" name="dez_vezes" value="10">
   10x <br>
    <center><input type="submit" value="Calcular"></center>
   <?php 
   $preco = 500;
   $A = $_POST['cinco_vezes'];
   $B = $_POST['oito_vezes'];
   $C = $_POST['dez_vezes'];
   
   ?>
   
<label> Valor de cada parcela: </label>
<input type="text" id="resultado_nota" name="resultado_nota" readonly="true" value="<?php if ($A) echo "R$ ",$preco/$A; elseif ($B) echo "R$ ",$preco/$B; elseif ($C) echo "R$ ",$preco/$C; ?>"/>
</form>




</body>
</html>

