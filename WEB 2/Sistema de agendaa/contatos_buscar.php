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
        
        <form action="contatos_buscar.php" method="get" id="validarformulario">
            <fieldset>
                <legend>Buscar Contato</legend>
                Procurar por:
                <input type="text" name="busca" id="busca" class="validate[required]" /><br />
                Nas colunas:
                <select name="coluna" id="coluna" class="validate[required]">
                    <option value="todas">Todas</option>
                    <option value="nome">Nome</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">E-mail</option>
                    <option value="endereco">Endereço</option>
                    <option value="cep">CEP</option>
                </select>
                <input type="hidden" name="validador" value="1" /><br />
                <input type="button" value="Voltar" onclick="window.location.href='index.php';"/>
                <input type="submit" value="Buscar" />
            </fieldset>
        </form>
        <br />
        <?php
            if(isset($_GET['validador']) && ($_GET['validador'] == 1)){
                ?>
                <!-- <table border="1"> -->
                <!-- Alterado após a estilização via CSS -->
                <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-Mail</th>
                        <th>Endereço</th>
                        <th>CEP</th>
                        <th>Ações</th>
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
                            $email = $vetor['email'];
                            $endereco = $vetor['endereco'];
                            $cep = $vetor['cep'];
                            ?>
                            <tr>
                                <td><?php echo $nome; ?></td>
                                <td><?php echo $telefone; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $endereco; ?></td>
                                <td><?php echo $cep; ?></td>
                                <td>
                                <!-- Inserção de ícone Woofunctions no lugar do texto de antes -->
                                <!-- <a href="contatos_editar.php?id=<?php echo $id; ?>">Editar</a> -->
                                <a href="contatos_editar.php?id=<?php echo $id; ?>">
                                    <img src="./common/icones/pencil_32.png" title="Editar" alt="Editar Contato" />
                                </a>
                                <!--
                                <a href="contatos_deletar.php?id=<?php echo $id; ?>" onclick="return confirm('Tem certeza que quer deletar esse contato?')">Deletar</a>
                                jQuery Alerts - Confirmação -->
                                <a href="#" onclick="jConfirm('Tem certeza que quer deletar esse contato?', 'Confirmação', function(valor){
                                    if (valor){
                                        window.location.href='contatos_deletar.php?id=<?php echo $id; ?>';
                                    }// Inserção de ícone Woofunctions no lugar do texto de antes
                                });"><img src="./common/icones/address_book_close_32.png" title="Deletar" alt="Deletar Contato" /></a>
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
    </body>
</html>