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
                <form action="contatos_buscar.php" method="get" id="validarformulario" data-ajax="false">
        <!--            Busca:-->
                    <div data-role="fieldcontain">
                        <label for="busca"></label>
                        <input type="search" id="busca" name="busca" class="validate[required]" />
                    </div>
                    <input type="hidden" name="coluna" value="todas" />
                    <input type="hidden" name="validador" value="1" />
                    <!--        <a href="contatos_buscar.php">Busca Avançada</a>-->
                </form>
                <!-- /Busca rápida -->
                <br />
                <!-- Mensagem -->
                Para mais informações, toque com o dedo no <b>nome</b> do contato (ou clique, se estiver usando mouse).
                <br /><br />
                <!--                <table border="1">-->
                <!-- Alterado após a estilização via CSS -->
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th width="50%">Nome</th>
                            <th width="50%">Telefone</th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php
                            $tabela = listar_tabela("contatos");
                            while ($vetor = mysql_fetch_array($tabela)){
                                $id = $vetor['id'];
                                $nome = $vetor['nome'];
                                $telefone = $vetor['telefone'];
                                ?>
                                <tr>
                                    <td class="nome_contato">
                                        <a href="contatos_listar.php?id=<?php echo $id; ?>" data-rel="dialog" style="display: block;">
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
                    <tfoot>
                        <tr>
                            <th colspan="6">
                                <!-- <a href="contatos_inserir.php">Inserir Contato</a><br /> -->
                                <!-- Inserção de ícone Woofunctions no lugar do texto de antes -->
                                <a href="contatos_inserir.php" data-role="button" data-ajax="false">
                                    <img class="imagem_botao_inserir" src="../common/icones/address_book_add_32.png" title="Inserir" />
                                    Inserir Contato
                                </a>
                            </th>
                        </tr>
                    </tfoot>
                </table>
                <br />
            </div>
            <!-- Rodapé da página -->
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