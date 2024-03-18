<?php

$hostname = "localhost";
$usuario = "id17392532_datauser";
$senha = 'L0PSXdflcNlED$e/';
$banco = 'id17392532_datatv';

$nometab = "tab_msg";
$col1 = "nome_msg";
$col2 = "email_msg";
$col3 = "msg";

$conn = mysqli_connect($hostname, $usuario, $senha);
mysqli_select_db($conn,$banco);

$sql = "SELECT * FROM $nometab";
$result = mysqli_query($conn,$sql);

if($result){

    echo"<style>
            table, th, td{
                border: 1px solid black;
                margin: 0px auto;
                background-color: lightblue;
            }
         </style>";

         echo"<table style='widht:100%'>";

         echo"<tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Mensagem</th>
                <th>Opções</th<
               </tr>";
    
    while($row = mysqli_fetch_array($result)){
        $nome = $row["$col1"];
        $email = $row["$col2"];
        $msg = $row["$col3"];

        echo "<tr>
                <td>$nome</td>
                <td>$email</td>
                <td>$msg</td>
                <td>
                  <form action='mailto:$email' method='post'>
                    <button type='submit' id='btnResp' name='' value=''><b>Responder</b></button>
                  </form>
                  <form action='exmsg.php' method='post'>
                    <button type='submit' id='btnExc' name='emailx' value='$email'><b>Remover</b></button>
                  </form>
                </td>
              </tr>";
              
    }

    echo "</table>";
    
}

?>

<!doctype html>
<html lang="pt-br">
<head>
<style>
        html {
          background: linear-gradient(to right, rgb(0, 196, 42) 4%, rgb(0, 66, 207));
        }
</style>
</head>
<body>
</body>
</html>