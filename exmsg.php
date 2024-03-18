<?php

$hostname = "localhost";
$usuario = "id17392532_datauser";
$senha = 'L0PSXdflcNlED$e/';
$banco = 'id17392532_datatv';

$nometab = "tab_msg";
$col2 = "email_msg";

$conn = mysqli_connect($hostname, $usuario, $senha, $banco);
$email = filter_input(INPUT_POST, "emailx");

$sql = "DELETE FROM $nometab WHERE $col2='$email'";

if(mysqli_query($conn,$sql)){
    echo "<script language='javascript' type='text/javascript'>
    alert('Exclusão efetuada com Sucesso !!!');window.location.
    href='ajudar.php'</script>";
}else{
    echo "Erro :". mysqli_error($conn);
}

mysqli_close($conn);

?>