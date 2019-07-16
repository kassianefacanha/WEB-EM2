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
            <!-- Cabeçalho da página -->
            <div data-role="header" data-theme="b" style="border-radius: 0px 0px 10px 10px;">
                <h1>Sistema de Agenda</h1>
            </div>
            <!-- Conteúdo da página -->
            <div data-role="content">
                <?php
                    $id = $_GET['id'];
                    $contato = listar_dados("contatos", $id);
                    while ($vetor = mysql_fetch_array($contato)){
                        $nome = $vetor['nome'];
                        $telefone = $vetor['telefone'];
                        $email = $vetor['email'];
                        $endereco = $vetor['endereco'];
                        $cep = $vetor['cep'];
                    }
                ?>
                <form action="contatos_editar.php" method="get" id="validarformulario" data-ajax="false">
                    <fieldset style="border: 2px solid RoyalBlue;">
                        <legend>Editar Contato</legend>
                        <div data-role="fieldcontain">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" class="validate[required]"/>
                        </div>
                        <!-- Telefone: -->
                        <div data-role="fieldcontain">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" id="telefone" value="<?php echo $telefone; ?>" class="validate[required,custom[phone]] text-input"/>
                        </div>
                        <!-- E-Mail: -->
                        <div data-role="fieldcontain">
                            <label for="email">E-Mail:</label>
                            <input type="text" name="email" id="email" value="<?php echo $email; ?>" class="validate[required,custom[email]] text-input"/>
                        </div>
                        <!-- Endereço: -->
                        <div data-role="fieldcontain">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" id="endereco" value="<?php echo $endereco; ?>" class="validate[required]"/>
                        </div>
                        <!-- CEP: -->
                        <div data-role="fieldcontain">
                            <label for="cep">CEP:</label>
                            <input type="text" name="cep" id="cep" value="<?php echo $cep; ?>" class="validate[required]"/>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
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
            <!-- Rodapé da página, inserido após estilizar a página -->
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
                $resultado = editar_dados($id, $_GET['nome'], $_GET['telefone'], $_GET['email'], $_GET['endereco'], $_GET['cep']);

                if ($resultado){
                    $mensagem = "Editado com sucesso!";
                } else {
                    $mensagem = "Não editado";
                }
                retornar($mensagem, "index.php");
            }
        ?>
    </body>
</html>
