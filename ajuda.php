<?php

$hostname = "localhost";
$usuario = "id17392532_datauser";
$senha = 'L0PSXdflcNlED$e/';
$banco = 'id17392532_datatv';

$conn = mysqli_connect($hostname, $usuario, $senha, $banco);

if(!$conn){
    die("Falha na Conexão com o Banco !!!". mysqli_connect_error());
}

    $nome_msg = filter_input(INPUT_POST, "nome_msg");
    $email_msg = filter_input(INPUT_POST, "email_msg");
    $msg  = filter_input(INPUT_POST, "msg");

    $sql = "INSERT INTO tab_msg(nome_msg,email_msg,msg)
    VALUES('$nome_msg','$email_msg','$msg')";

    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'>
        alert('Mensagem enviada, Fique de olho no seu Email !!!');window.location.
        href='Ajuda.html'</script>";
    }
    else{
        echo "Erro :". mysqli_error($conn);
    }

    mysqli_close($conn);

?>