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
        
        <form action="contatos_inserir.php" method="get" id="validarformulario">
            <fieldset>
                <legend>Inserir Contato</legend>
                <!-- Inserida classe para os rótulos dos campos, para ser possível estilizá-los -->
                <!-- Nome: -->
                <span class="rotulo">Nome:</span>
                <input type="text" name="nome" id="nome" class="validate[required]"/>
                <br /><br />
                <!-- Telefone: -->
                <span class="rotulo">Telefone:</span>
                <input type="text" name="telefone" id="telefone" class="validate[required,custom[phone]] text-input"/>
                <br /><br />
                <!-- E-Mail: -->
                <span class="rotulo">E-Mail:</span>
                <input type="text" name="email" id="email" class="validate[required,custom[email]] text-input"/>
                <br /><br />
                <!-- Endereço: -->
                <span class="rotulo">Endereço:</span>
                <input type="text" name="endereco" id="endereco" class="validate[required]"/>
                <br /><br />
                <!-- CEP: -->
                <span class="rotulo">CEP:</span>
                <input type="text" name="cep" id="cep" class="validate[required]"/>
                <br /><br />
                <input type="hidden" name="validador" value="1" />
                <input type="button" value="Voltar" onclick="window.location.href='index.php';"/> <input type="reset" value="Limpar"/> <input type="submit" value="Ok"/>
            </fieldset>
        </form>
        <br />
        <!-- Rodapé da página, inserido após estilizar a página -->
        <h1 class="rodape">
            Módulo V - Projeto de Sistema<br />
            <?php
                $temp = explode("/", $_SERVER['REQUEST_URI']);
                $temp = end($temp);
                $pagina_mobile = str_replace("&mobile=nao", "", $temp);
            ?>
            <a href="mobile/<?php echo $pagina_mobile; ?>" class="link_mobile_desktop">Versão Mobile</a>
        </h1>
        <?php
            if(isset($_GET['validador']) && ($_GET['validador'] == 1)){
                $resultado = inserir_dados($_GET['nome'], $_GET['telefone'], $_GET['email'], $_GET['endereco'], $_GET['cep']);

                if ($resultado){
                    $mensagem = "Inserido com sucesso!";
                } else {
                    $mensagem = "Não inserido";
                }
                retornar($mensagem, "index.php");
            }
        ?>
    </body>
</html>