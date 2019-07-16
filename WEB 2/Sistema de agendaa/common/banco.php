<?php
    function conecta_banco(){
        $link = mysql_connect('localhost', 'root', '');
        if (!$link) {
            die('Não foi possível conectar: ' . mysql_error());
        }
        mysql_select_db('agenda');
    }
    
    function desconecta_banco(){
        mysql_close(mysql_connect('localhost', 'root', ''));
    }

    function listar_tabela($contato){
        conecta_banco();
        $resultado = mysql_query("select * from $contato order by nome");
        desconecta_banco();
        return $resultado;
    }
    
    function listar_dados($contato, $id){
        conecta_banco();
        $resultado = mysql_query("select * from $contato where id = '$id'");
        desconecta_banco();
        return $resultado;
    }
    
    function buscar_dados($contato, $busca, $coluna){
        conecta_banco();
        if ($coluna == "todas")
            $resultado = mysql_query("select * from $contato where nome like '%$busca%' or telefone like '%$busca%' or email like '%$busca%' or endereco like '%$busca%' or cep like '%$busca%'");
        else
            $resultado = mysql_query("select * from $contato where $coluna like '%$busca%'");
        desconecta_banco();
        return $resultado;
    }
    
    function inserir_dados($nome, $telefone, $email, $endereco, $cep){
        conecta_banco();
        $resultado = mysql_query("insert into contatos (nome, telefone,	email, endereco, cep) values ('$nome', '$telefone', '$email', '$endereco', '$cep')");
        if (!$resultado) echo mysql_error();
        desconecta_banco();
        return $resultado;
    }
    
    function editar_dados($id, $nome, $telefone, $email, $endereco, $cep){
        conecta_banco();
        $resultado = mysql_query("update contatos set nome = '$nome', telefone = '$telefone', email = '$email', endereco = '$endereco', cep = '$cep' where id = '$id'");
        if (!$resultado) echo mysql_error();
        desconecta_banco();
        return $resultado;
    }
    
    function deletar_dados($id){
        conecta_banco();
        $resultado = mysql_query("delete from contatos where id = '$id'");
        if (!$resultado) echo mysql_error();
        desconecta_banco();
        return $resultado;
    }
?>