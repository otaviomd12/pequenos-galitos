<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>  CADASTRO DE CONTATOS </h1>
    <form action = "contato.php">
    <label>NOME:</label><br>
    <Imput type= "text" name = "fname"><br>
    <label>SOBRENOME:</label><br>
    <Imput type= "text" name = "fsobrenome"><br>
    <label>TELEFONE:</label><br>
    <Imput type= "text" name = "fsobrenome"><br><br>
    <Imput type= "submit" value = "Gravar">
</form>

<?php

include  "conexao.php";

if($_SERVER ["REQUEST_METHOD"]== "POST"){ 
//COLETA DE DADOS

$name= $_POST ["fnome"];
$sobrenome= $_POST ["fsobrenome"];
$telefone= $_POST ["ftelefone"];

//INSERIR DADOS NA TABELA

$sql= "INSERT INTO db (nome, sobrenome, telefone) VALUES ('$nome, $sobrenome,$telefone')";

if ($conn-> query ($sql) === TRUE) {echo "dados inseridos com sucesso"."<br>";
}else{
    echo"ERRO:".$conn-> error;
}

}


$conn->close();




?>



<a href= "index.php"> Consultar agenda </a>
</body>
</html>