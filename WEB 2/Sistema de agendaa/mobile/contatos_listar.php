<?php
    require_once("../common/banco.php");
    require_once("../common/mensagens.php");
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
    <?php require_once("cabecalho.php"); ?>
    <body>
        <div data-role="header" data-theme="b">
            <h1>Informações</h1>
        </div>
        <div data-role="content" data-theme="b">
            <?php
                $tabela = listar_dados("contatos", $id);
                while ($vetor = mysql_fetch_array($tabela)){
                    $nome = $vetor['nome'];
                    $telefone = $vetor['telefone'];
                    $email = $vetor['email'];
                    $endereco = $vetor['endereco'];
                    $cep = $vetor['cep'];
                }
            ?>
            <table border="1" width="100%">
                <tr>
                    <th width="40%">Nome</th>
                    <td width="60%"><?php echo $nome; ?></td>
                </tr>
                <tr>
                    <th width="40%">Telefone</th>
                    <td width="60%"><?php echo $telefone; ?></td>
                </tr>
                <tr>
                    <th width="40%">E-Mail</th>
                    <td width="60%"><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th width="40%">Endereço</th>
                    <td width="60%"><?php echo $endereco; ?></td>
                </tr>
                <tr>
                    <th width="40%">CEP</th>
                    <td width="60%"><?php echo $cep; ?></td>
                </tr>
            </table>
            <a href="contatos_editar.php?id=<?php echo $id; ?>" data-role="button" data-ajax="false">
                <img class="imagem_botao_inserir" src="../common/icones/pencil_32.png" title="Editar" alt="Editar Contato" />
                &nbsp;Editar Contato
            </a>
            <a href="" data-role="button" onclick="jConfirm('Tem certeza que quer deletar esse contato?', 'Confirmação', function(valor){
                if (valor){
                    window.location.href='contatos_deletar.php?id=<?php echo $id; ?>';
                }// Inserção de ícone Woofunctions no lugar do texto de antes
            });"><img class="imagem_botao_inserir" src="../common/icones/address_book_close_32.png" title="Deletar" alt="Deletar Contato" />
                &nbsp;Apagar Contato
            </a>
        </div>
    </body>
</html>
