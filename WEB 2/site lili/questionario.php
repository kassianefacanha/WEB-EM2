<html>
<head>
<title>input</title>
</head>
<body>
<center>
<h1>Resolva as quest�es sobre a hist�ria do Cear�!!!</h1>
<form action="questionario.php" method="post">
    1- Em que ano ocorreu a liberta��o dos escravos:
    <br>a)1500
    <br>b)1788
    <br>c)1884
    <br>d)1888<br>
   <select name="q1">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
   
     2- Onde se localizavam as fazendas que mais tinham m�o-de-obra escrava:
    <br>a)Pernambuco e Bahia
    <br>b)Piau� e Maranh�o
    <br>c)Para�ba e Alagoas
    <br>d)Recife e Cear�<br>
   <select name="q2">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
   
   3- Em que ano se deu o fim do tr�fico de escravos:
    <br>a)1500
    <br>b)1850
    <br>c)1884
    <br>d)1888<br>
   <select name="q3">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
     
   4- Em que ano foi fundado o municipio de Fortaleza:
    <br>a)1500
    <br>b)1726
    <br>c)1884
    <br>d)1888<br>
   <select name="q4">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
   
   5- Em que ano a capitania do Cear� alcan�ou autonomia:
   <br>a)1500
    <br>b)1788
    <br>c)1799
    <br>d)1888<br>
   <select name="q5">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
   
   6- Em que ano o Cear� tornou-se capitania subalterna de Pernambuco:
   <br>a)1680
    <br>b)1788
    <br>c)1884
    <br>d)1888<br>
   <select name="q6">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
   
   7- Qual o apelido dado ao Cear�:
   <br>a)Terra da luz
    <br>b)Terra da mulher bonita
    <br>c)Terra dos cabe�as chatas
    <br>d)Terra do escravos<br>
   <select name="q7">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
   
   8- Por quem foi dado esse apelido ao Cear�:
   <br>a)Jos� do Patroc�nio
    <br>b)Pedro �lvares Cabral
    <br>c)Pero Vaz de Caminha
    <br>d)Princesa Isabel<br>
   <select name="q8">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
   
   9- O que os cearenses iam fazer na Amaz�nia:
   <br>a)Agricultura
    <br>b)Seringais
    <br>c)Pecu�ria
    <br>d)Trabalhar em f�bricas<br>
   <select name="q9">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
   
   10- Quem era o l�der pol�tico-religioso da regi�o do Cariri:
   <br>a)Jos� do Patroc�nio
    <br>b)Diego de Lepe
    <br>c)Vicente Piz�n
    <br>d)Padre C�cero Rom�o<br>
   <select name="q10">
   <option value=a>A</option>
   <option value=b>B</option>
   <option value=c>C</option>
   <option value=d>D</option>
   </select><br>
      <input type=submit value='Corre��o autom�tica do teste'>
</form>
<?php

$respostas[1] = 'd';
$respostas[2] = 'a';
$respostas[3] = 'b';
$respostas[4] = 'b';
$respostas[5] = 'c';
$respostas[6] = 'a';
$respostas[7] = 'a';
$respostas[8] = 'a';
$respostas[9] = 'b';
$respostas[10] = 'd';

$corretas=0;
$erradas=0;

foreach( $respostas AS $questao_numero => $resposta ) {
	$questao_nome = 'q'.$questao_numero;
	unset( $correta );
	if( $resposta == $_POST[$questao_nome] ) { $correta = TRUE; }
	$alternativa_aluno = strtoupper( $_POST[$questao_nome] );
	$alternativa_correta = strtoupper( $resposta );
	echo "Quest�o {$questao_numero}:";
	if( $correta ) {
		echo " Correta! Alternativa {$alternativa_correta}.";
		$corretas++;
	} else {
		echo " <font color=red>Errada. Selecionada alternativa {$alternativa_aluno}.
		 Correta: {$alternativa_correta}.</font>";
		$erradas++;
	} // else
	echo "<br>";
} // foreach

$respostas_numero = count($respostas);

$nivel = 80;

$percentual = $corretas * ( 100 / $respostas_numero );

if( $percentual >= $nivel ) {
	$cor = '#efe';
	$msg = "Voc� atingiu o percentual necess�rio de acertos! Parab�ns, Continue assim.";
} else {
	$cor = '#fee';
	$msg = "Voc� n�o atingiu o percentual necess�rio de acertos! Que pena, estude mais!!.";
} // else

echo "<p><div style='background: {$cor}; padding: 10px; font-weight: bold; text-align: center;'>
Voc� acertou {$corretas} quest�o(�es). Errou {$erradas}. Percentual de acertos: {$percentual}%.
<br>{$msg}
</div>";

?>

</body>
</html>

