<?php
function notificar($mensagem){
    //echo "<script language='javascript'>alert('$mensagem');</script>";
    // jQuery Alerts:
    echo "<script language='javascript'>jAlert('$mensagem', 'Aviso');</script>";
}

function retornar($mensagem, $retorno){
    //echo "<script language='javascript'>jAlert('$mensagem'); window.location.href='$retorno';</script>";
    // jQuery Alerts:
    echo "<script language='javascript'>jAlert('$mensagem', 'Informação', function(){ window.location.href='$retorno';});</script>";
    exit;
}
?>