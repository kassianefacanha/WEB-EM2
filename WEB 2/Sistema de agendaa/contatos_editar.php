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
            $contato = listar_dados("contatos", $id);
            while ($vetor = mysql_fetch_array($contato)){
                $nome = $vetor['nome'];
                $telefone = $vetor['telefone'];
                $email = $vetor['email'];
                $endereco = $vetor['endereco'];
                $cep = $vetor['cep'];
            }
        ?>
        <form action="contatos_editar.php" method="get" id="validarformulario">
            <fieldset>
                <legend>Editar Contato</legend>
                <span class="rotulo">Nome:</span>
                <input type="text" name="nome" value="<?php echo $nome; ?>" id="nome" class="validate[required]" />
                <br /><br />
                <span class="rotulo">Telefone:</span>
                <input type="text" name="telefone" value="<?php echo $telefone; ?>" id="telefone" class="validate[required,custom[phone]] text-input" />
                <br /><br />
                <span class="rotulo">E-Mail:</span>
                <input type="text" name="email" value="<?php echo $email; ?>" id="email" class="validate[required,custom[email]] text-input" />
                <br /><br />
                <span class="rotulo">Endereço:</span>
                <input type="text" name="endereco" value="<?php echo $endereco; ?>" id="endereco" class="validate[required]" />
                <br /><br />
                <span class="rotulo">CEP:</span>
                <input type="text" name="cep" value="<?php echo $cep; ?>" id="cep" class="validate[required]" />
                <br /><br />
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
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
