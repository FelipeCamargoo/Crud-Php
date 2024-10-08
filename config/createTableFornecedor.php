<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "sistema";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
                   $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "create table fornecedor(codigo int PRIMARY KEY AUTO_INCREMENT,
                     nome varchar(50) not null,
                     cnpj varchar(20) not null,
                     estado varchar(20) not null,
                     contato varchar(40) not null)";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Tabela Cliente criado com sucesso";
} catch(PDOException $e) {
  echo "Erro: " . $e->getMessage();
}

$conn = null;
?>