<?php
    require_once("common/banco.php");
    require_once("common/mensagens.php");
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <?php require_once("cabecalho.php"); ?>
    <body>
        <!-- <h1>Sistema de Agenda</h1> -->
        <!-- Cabeçalho da página melhorado com estilização -->
        <h1 class="cabecalho">Sistema de Agenda</h1>
        <?php
            $id = $_GET['id'];
            $resultado = deletar_dados($id);
            if ($resultado){
                $mensagem = "Deletado com sucesso!";
            }else{
                $mensagem = "Não deletado";
            }
            retornar($mensagem, "index.php");
        ?>
    </body>
</html>
