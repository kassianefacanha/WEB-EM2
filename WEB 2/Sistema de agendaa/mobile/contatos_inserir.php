<?php
    require_once("../common/banco.php");
    require_once("../common/mensagens.php");
?>
<!DOCTYPE html>
<html>
    <?php require_once("cabecalho.php"); ?>
    <body>
        <div data-role="page" data-theme="b">
            <!-- Cabeçalho da página -->
            <div data-role="header" data-theme="b" style="border-radius: 0px 0px 10px 10px;">
                <h1>Sistema de Agenda</h1>
            </div>
            <!-- Conteúdo da página -->
            <div data-role="content">
                <form action="contatos_inserir.php" method="get" id="validarformulario" data-ajax="false">
                    <fieldset style="border: 2px solid RoyalBlue;">
                        <legend>Inserir Contato</legend>
                        <!-- Inserida classe para os rótulos dos campos, para ser possível estilizá-los -->
                        <!-- Nome: -->
                        <div data-role="fieldcontain">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="validate[required]"/>
                        </div>
                        <!-- Telefone: -->
                        <div data-role="fieldcontain">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" id="telefone" class="validate[required,custom[phone]] text-input"/>
                        </div>
                        <!-- E-Mail: -->
                        <div data-role="fieldcontain">
                            <label for="email">E-Mail:</label>
                            <input type="text" name="email" id="email" class="validate[required,custom[email]] text-input"/>
                        </div>
                        <!-- Endereço: -->
                        <div data-role="fieldcontain">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" id="endereco" class="validate[required]"/>
                        </div>
                        <!-- CEP: -->
                        <div data-role="fieldcontain">
                            <label for="cep">CEP:</label>
                            <input type="text" name="cep" id="cep" class="validate[required]"/>
                        </div>
                        <input type="hidden" name="validador" value="1" />
                        <div style="text-align: center;">
                            <input type="button" value="Voltar" onclick="window.location.href='index.php';" data-inline="true" data-transition="slide" data-direction="reverse" data-icon="back" />
                            <input type="reset" value="Limpar" data-inline="true" data-icon="refresh" />
                            <input type="submit" value="Ok" data-inline="true" data-icon="check" />
                        </div>
                    </fieldset>
                </form>
                <br />
            </div>
            <div data-role="footer" data-theme="b" style="border-radius: 10px 10px 0px 0px;">
                <p>
                    Módulo V - Projeto de Sistema<br />
                    <?php
                        $temp = explode("/", $_SERVER['REQUEST_URI']);
                        $temp = end($temp);
                        $temp = explode("?", $temp);
                        $pagina_atual = $temp[0];
                        if(isset($temp[1]))
                            $argumentos = $temp[1];
                        else
                            $argumentos = "";
                        $pagina_desktop = $pagina_atual . "?" . $argumentos . "&mobile=nao";
                    ?>
                    <a href="#" onclick="window.location.href='../<?php echo $pagina_desktop; ?>'" style="color: white;">Versão Desktop</a>
                </p>
            </div>
        </div>
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