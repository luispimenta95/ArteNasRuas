<?php
  include 'conecta.php';

$msg = false;

   $nome = $_POST["nome"];
    $email = $_POST["email"];
        $telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];

           

$sql_code = "INSERT INTO contato (nome,email,telefone,mensagem,data_contato) VALUES ('$nome','$email','$telefone','$mensagem',NOW())";// Salva o registro do cliente no banco de dados
        if ($conn->query($sql_code) === TRUE) {

  

          header("Location:index.php");

        }



?>