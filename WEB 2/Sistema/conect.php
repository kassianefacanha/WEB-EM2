 <html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
$nome	= $_POST ["nome"];	//atribui��o do campo "nome" vindo do formul�rio para variavel	
$email	= $_POST ["email"];	//atribui��o do campo "email" vindo do formul�rio para variavel
$ddd	= $_POST ["ddd"];	//atribui��o do campo "ddd" vindo do formul�rio para variavel
$tel	= $_POST ["telefone"];	//atribui��o do campo "telefone" vindo do formul�rio para variavel
$endereco	= $_POST ["endereco"];	//atribui��o do campo "endereco" vindo do formul�rio para variavel
$cidade	= $_POST ["cidade"];	//atribui��o do campo "cidade" vindo do formul�rio para variavel
$estado	= $_POST ["estado"];	//atribui��o do campo "estado" vindo do formul�rio para variavel
$bairro = $_POST ["bairro"];	//atribui��o do campo "bairro" vindo do formul�rio para variavel
$pais	= $_POST ["pais"];	//atribui��o do campo "pais" vindo do formul�rio para variavel
$login	= $_POST ["login"];	//atribui��o do campo "login" vindo do formul�rio para variavel
$senha	= $_POST ["senha"];	//atribui��o do campo "senha" vindo do formul�rio para variavel
$news	= $_POST ["news"];	//atribui��o do campo "news" vindo do formul�rio para variavel
$sexo	= $_POST ["sexo"];	//atribui��o do campo "sexo" vindo do formul�rio para variavel

$conexao = mysql_connect("localhost","root"); //essa linha ir� fazer a conex�o com o banco de dados.
if (!$conexao)
die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ").mysql_error();//aqui irei testar se houve falha de conex�o
//conectando com a tabela do banco de dados

$banco = mysql_select_db("kassiane",$conexao); //nome da tabela onde os dados ser�o armazenados
//Query que realiza a inser��o dos dados no banco de dados na tabela indicada acima

$query = "INSERT INTO `clientes`(`nome`, `email`, `sexo`, `ddd`, `telefone`, `endereco`, `cidade`, `estado`, `bairro`, `pais`, `login`, `senha`, `news`, `id`) VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '$news', '')";

mysql_query($query,$conexao);

//$query = nome da vari�vel que utilizarei para realizar a opera��o de inser��o dos dados
//clientes = nome da tabela que ser� salvo os dados do cadastro do cliente
//nome, email, sexo, ddd, telefone, endere�o, cidade, estado, bairro, pa�s, login, senha, news, id. S�o apenas os nomes dos campos que constam na tabela clientes.
//VALUES = indica que ser�o inseridos os seguintes valores.
//$nome, $email, $sexo, $ddd, $telefone, $endere�o, $cidade, $estado, $bairro, $pa�s, //$login, $senha, $news, $id.
//S�o apenas as variaveis a qual eu atribui os valores digitados no formul�rio.
echo "Seu cadastro foi realizado com sucesso!Agradecemos a aten��o.";
//mensagem que � escrita quando os dados s�o inseridos normalmente.

?>
 
 
  <a href="cadastro.html">
        voltar
        </a> 
        </body>
  
  </html>
 