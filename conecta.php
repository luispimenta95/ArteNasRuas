<?php
$conn = new MySQLi('localhost', 'u780192131_root', 'Mp13151319', 'u780192131_projeto');
if($conn->connect_error){
   echo "Desconectado! Erro: " . $conn->connect_error;
}


?>