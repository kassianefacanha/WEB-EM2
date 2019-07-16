<?php
    require_once("common/banco.php");
    require_once("common/mensagens.php");
    require_once("common/detecta_navegador.php");
    if (isset($_GET['mobile']) && $_GET['mobile'] == "nao") {
        unset($_GET['mobile']);
    }
    elseif(detecta_dispositivo_movel()){
        header('Location: mobile/index.php');
    }
?>

<html>
    <?php require_once("cabecalho.php"); ?>
    <body>
        <!-- <h1>Sistema de Agenda</h1> -->
        <!-- Cabeçalho da página melhorado com estilização -->
        <h1 class="cabecalho">Sistema de Agenda</h1>
        
        <!-- Busca rápida, projetada para efetuar buscas em todas as tabelas do banco -->
        <form action="contatos_buscar.php" method="get" id="validarformulario">
<!--            Busca:-->
            <a href="contatos_buscar.php"><img src="./common/icones/search_32.png" title="Busca Avançada" alt="Busca Avançada" /></a>
            <input type="text" name="busca" class="validate[required]" id="busca"/>
            <input type="hidden" name="coluna" value="todas"/>
            <input type="hidden" name="validador" value="1"/>
            <input type="submit" value="Buscar"/>
            <!--        <a href="contatos_buscar.php">Busca Avançada</a>-->
        </form>
        <!-- /Busca rápida -->
        <br />
        <!--                <table border="1">-->
        <!-- Alterado após a estilização via CSS -->
        <table border="1">
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
                    $tabela = listar_tabela("contatos");
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
            <tfoot>
                <tr>
                    <th colspan="6">
                        <!-- <a href="contatos_inserir.php">Inserir Contato</a><br /> -->
                        <!-- Inserção de ícone Woofunctions no lugar do texto de antes -->
                        <a href="contatos_inserir.php" class="botao_inserir">
                            <img class="imagem_botao_inserir" src="./common/icones/address_book_add_32.png" title="Inserir" />
                            Inserir Contato
                        </a>
                    </th>
                </tr>
            </tfoot>
        </table>
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