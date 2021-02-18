<?php
$conn = new MySQLi('localhost', 'root', '', 'projeto');
if($conn->connect_error){
   echo "Desconectado! Erro: " . $conn->connect_error;
}


?>