<html>
<head><title>Sistema de Agenda</title></head>
<h1>Sistema de Agenda</h1>
<table border="1">
<thead>
<tr>
<th>Nome:</th>
<th>Telefone:</th>
<th>Endereco:</th>
<th>CEP:</th>
<th>Ações:</th>

</tr>
</thead>
<tbody>
<?php 
$conexao = mysql_connect("localhost","root","");
if (!$conexao){
	
die ("Não foi conectado:".mysql_error());
}
mysql_select_db("agenda");

$resultado = mysql_query("select * from contato");
while($vetor = mysql_fetch_array($resultado))

{
echo "<tr>";
echo "<td>". $vetor['nome']."</td>";
echo "<td>". $vetor['telefone']."</td>";
echo "<td>". $vetor['email']."</td>";
echo "<td>". $vetor['endereco']."</td>";
echo "<td>". $vetor['cep']."</td>";
	echo "</tr>";
	
}
mysql_close($conexao);
?>


</tbody>

</table>



</html>