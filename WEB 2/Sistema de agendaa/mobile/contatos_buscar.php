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
            <div data-role="header" data-theme="b" style="border-radius: 0px 0px 10px 10px;">
                <h1>Sistema de Agenda</h1>
            </div>
            <div data-role="content">
                <form action="contatos_buscar.php" method="get" id="validarformulario" data-ajax="false">
                    <fieldset style="border: 2px solid RoyalBlue;">
                        <legend>Buscar Contato</legend>
                        <div data-role="fieldcontain">
                            <label for="busca">Procurar por:</label>
                            <input type="search" name="busca" id="busca" class="validate[required] text-input"/>
                        </div>
                        <div data-role="fieldcontain">
                            <label for="coluna">Nas colunas:</label>
                            <select name="coluna" id="coluna" class="validate[required]">
                                <option value="todas">Todas</option>
                                <option value="nome">Nome</option>
                                <option value="telefone">Telefone</option>
                                <option value="email">E-mail</option>
                                <option value="endereco">Endereço</option>
                                <option value="cep">CEP</option>
                            </select>
                        </div>
                        <input type="hidden" name="validador" value="1" />
                        <div style="text-align: center;">
                            <a href="index.php" data-role="button" data-transition="slide" data-inline="true" data-direction="reverse" data-icon="back">Voltar</a>
                            <input type="submit" value="Buscar" data-inline="true" data-icon="search" />
                        </div>
                    </fieldset>
                </form>
                <br />
                <?php
                    if(isset($_GET['validador']) && ($_GET['validador'] == 1)){
                        ?>
                        <!-- Mensagem -->
                        Para mais informações, toque com o dedo no <b>nome</b> do contato (ou clique, se estiver usando mouse).
                        <br /><br />
                        <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <th width="50%">Nome</th>
                                    <th width="50%">Telefone</th>
                               </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $busca = $_GET['busca'];
                                    $coluna = $_GET['coluna'];
                                    $tabela = buscar_dados("contatos", $busca, $coluna);
                                    if(mysql_num_rows($tabela) == 0) {
                                        echo "Sem resultados <br /><br />";
                                        notificar("Sem resultados");
                                    } else {
                                        if (mysql_num_rows($tabela) == 1)
                                            echo mysql_num_rows($tabela) . " resultado.";
                                        else
                                            echo mysql_num_rows($tabela) . " resultados.";
                                    }
                                    while ($vetor = mysql_fetch_array($tabela)){
                                        $id = $vetor['id'];
                                        $nome = $vetor['nome'];
                                        $telefone = $vetor['telefone'];
                                        ?>
                                        <tr>
                                            <td class="nome_contato">
                                                <a href="contatos_listar.php?id=<?php echo $id; ?>" data-rel="dialog" data-transition="pop" style="display: block;">
                                                    <?php echo $nome; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <?php echo $telefone; ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <?php
                    }
                ?>
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
    </body>
</html>