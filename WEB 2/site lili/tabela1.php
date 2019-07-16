<html>
<head>
<title>input</title>
<?php 
$cargos_salarios = array(
	'Líder de sistemas' => array('sal' => '8.155,00'),
	'Analista programador Java' => array('sal' => '3.900,00'),
	'Analista de testes' => array('sal' => '2.900,00'),
	'Analista de segurança da informação' => array('sal' => '8.155,00'),
	'Administrador de rede' => array('sal' => '4.480,00')	
     );
?>
</head>
<body>
<center>
<form name="form_tab">
    <h1><font face="monotype coursiva">Tabela de Salários de TI</h1></font>
    <table border="1">
         <thread>
             <tr>
                 <th>Cargo</th>
                 <th>Salários</th>
             </tr>
          </thread>
          <?php foreach ($cargos_salarios as $valor => $vl_sal){ ?>
            <tbody>
                <tr>
                    <td><?php echo $valor; ?></td>
                    <?php foreach ($vl_sal as $vlr => $vl_sals){ ?>
                           <td><?php echo $vl_sals; ?></td>
                    </tr>
            </tbody>
            <?php 
}
    }   
            ?>
    </table>
</form>
</center>
</body>
</html>
