<?php
    require_once("../common/banco.php");
    require_once("../common/mensagens.php");
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <?php require_once("cabecalho.php"); ?>
    <body>
        <div data-role="page" data-theme="b">
            <!-- <h1>Sistema de Agenda</h1> -->
            <!-- Cabeçalho da página melhorado com estilização -->
            <div data-role="header" data-theme="b" style="border-radius: 0px 0px 10px 10px;">
                    <h1>Sistema de Agenda</h1>
            </div>
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
        </div>
    </body>
</html>
