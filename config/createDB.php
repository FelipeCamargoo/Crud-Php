<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

try {
  //cria a conexão com o banco de dados
  $conn = new PDO("mysql:host=$servername", $username, $password);
  
  // defina o modo de erro PDO como exceção
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  //string de criação do banco de dados
  $sql = "CREATE DATABASE sistema";
  
  // executa a instrução SQL
  $conn->exec($sql);
  
  echo "Banco de Dados criado com sucesso<br>";

} catch(PDOException $e) {
 // echo "Erro" . $e->getMessage();
}

$conn = null;
?>