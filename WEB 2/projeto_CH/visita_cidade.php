<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="recebe.css">
</head>
<body>
<div id="visita">
<?php

$cidade_vis = $_POST['lista_cidade'];
require 'select_1_2.php';
foreach ($cidade_vis as $vl_cidade){
	echo '<p></p> <font color="white"> Obrigado por visita:</font> ', $vl_cidade;
}

?>

</div>
</body>
</html>